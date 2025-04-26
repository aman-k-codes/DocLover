<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use ConvertApi\ConvertApi;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use PhpOffice\PhpWord\PhpWord;
use Spatie\PdfToText\Pdf;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;


class DocsController extends Controller
{


    public function removeBG(Request $request)
    {

        try {
            $request->validate([
                'image' => 'required|image|max:25600', // Max 25MB
            ]);

            $image = $request->file('image');

            Log::debug('API URL', ['url' => env('API_URL')]);

            $response = Http::attach(
                'file',
                file_get_contents($image->getRealPath()), // <-- safer than ->get()
                $image->getClientOriginalName()
            )->post(env('API_URL') . '/remove-bg');

            Log::debug('External API Response', ['status' => $response->status(), 'body' => $response->body()]);


            if ($response->successful()) {
                return response($response->body(), 200)
                    ->header('Content-Type', 'image/png');
            } else {
                Log::error('Background removal API failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return response()->json(['error' => 'Failed to remove background'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Exception in removeBG', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['error' => 'Server error', 'details' => $e->getMessage()], 500);
        }
    }

    public function convertPDFtoWord(Request $request)
    {
        try {
            $request->validate([
                'pdf_file' => 'required|file|mimes:pdf|max:25600', // Max 25MB
            ]);

            $pdf = $request->file('pdf_file');

            Log::debug('API URL', ['url' => env('API_URL')]);

            // Send the PDF to external API
            $response = Http::attach(
                'file', // IMPORTANT: should match the expected field name in Flask
                file_get_contents($pdf->getRealPath()),
                $pdf->getClientOriginalName()
            )->post(env('API_URL') . '/pdf-to-word'); // <-- your Flask route

            Log::debug('External API Response', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            if ($response->successful()) {
                // Send the DOCX file back to user
                return response($response->body(), 200)
                    ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                    ->header('Content-Disposition', 'attachment; filename="converted.docx"');
            } else {
                Log::error('PDF to Word API failed', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return response()->json(['error' => 'Failed to convert PDF to Word'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Exception in convertPDFtoWord', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['error' => 'Server error', 'details' => $e->getMessage()], 500);
        }
    }



    public function PDFtoZIP(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:25600', // Max size 25MB
        ]);

        $pdfFile = $request->file('pdf');
        $pdfName = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
        $zipName = $pdfName . '.zip';

        $zipPath = storage_path("app/public/{$zipName}");

        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
            $zip->addFile($pdfFile->getRealPath(), $pdfFile->getClientOriginalName());
            $zip->close();
        } else {
            return response()->json(['error' => 'Failed to create ZIP file.'], 500);
        }

        return response()->download($zipPath)->deleteFileAfterSend(true);
    }

    public function JPGtoPNG(Request $request)
    {
        // Validate input image
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg|max:10240', // Accept both .jpeg and .jpg
        ]);

        $jpgFile = $request->file('image');

        // Generate PNG filename
        $pngName = 'Converted_' . time() . '_' . ($request->id ?? 'user') . '.png';

        // Ensure directory exists
        $pngDirectory = storage_path("app/public/jpg-to-png/");
        if (!file_exists($pngDirectory)) {
            mkdir($pngDirectory, 0777, true);
        }

        // Convert JPG to PNG
        $image = imagecreatefromjpeg($jpgFile->getRealPath());
        if (!$image) {
            return response()->json(['error' => 'Failed to process image.'], 500);
        }

        $pngPath = $pngDirectory . $pngName;
        imagepng($image, $pngPath);
        imagedestroy($image);

        // Generate a public URL for the converted image
        $fileUrl = asset("storage/jpg-to-png/{$pngName}");

        return response()->json([
            'success' => true,
            'message' => 'Image converted successfully.',
            'file_url' => $fileUrl,
        ]);
    }



    public function enhanceImageQuality(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:25600', // Max 25MB
        ]);

        $response = Http::attach(
            'image',
            $request->file('image')->get(),
            $request->file('image')->getClientOriginalName()
        )->post('http://127.0.0.1:5000/remove-bg');

        if ($response->successful()) {
            return response($response->body(), 200)
                ->header('Content-Type', 'image/png');
        } else {
            return response()->json(['error' => 'Failed to remove background'], 500);
        }
    }
}
