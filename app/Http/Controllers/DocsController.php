<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PDFMerger\PDFMerger;



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

        // Send the image to the Flask API for enhancement
        $response = Http::attach(
            'file', // <- your Flask expects 'file', not 'image'
            $request->file('image')->get(),
            $request->file('image')->getClientOriginalName()
        )->post('http://127.0.0.1:5000/api/enhance-photo'); // <- correct Flask API URL

        if ($response->successful()) {
            return response($response->body(), 200)
                ->header('Content-Type', 'image/jpeg') // Flask sends JPEG
                ->header('Content-Disposition', 'attachment; filename="enhanced.jpg"');
        } else {
            return response()->json(['error' => 'Failed to enhance image quality'], 500);
        }
    }


    public function convertPDFtoHTML(Request $request)
    {
        try {
            // Validate incoming PDF (field name in your form should be "pdf_file")
            $request->validate([
                'file' => 'required|file|mimes:pdf|max:25600', // Max 25MB
            ]);

            $pdfFile = $request->file('file');

            Log::debug('API URL', ['url' => env('API_URL')]);

            // Send the file to the Flask API (make sure the Flask API expects 'file' field)
            $response = Http::attach(
                'file', // This field must be 'file' because Flask expects it that way
                file_get_contents($pdfFile->getRealPath()),
                $pdfFile->getClientOriginalName()
            )->post(env('API_URL') . '/api/pdf-to-html');  // Flask API endpoint

            Log::debug('External API Response', [
                'status' => $response->status(),
                'body' => substr($response->body(), 0, 500),
            ]);

            if ($response->successful()) {
                // Return the HTML content from the Flask API as a response
                return response($response->body(), 200)
                    ->header('Content-Type', 'text/html')
                    ->header('Content-Disposition', 'attachment; filename="converted.html"');
            } else {
                Log::error('PDF to HTML API failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return response()->json(['error' => 'Failed to convert PDF to HTML'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Exception in convertPDFtoHTML', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['error' => 'Server error', 'details' => $e->getMessage()], 500);
        }
    }


    public function imageToText(Request $request)
    {
        try {
            // Validate the uploaded image
            $request->validate([
                'file' => 'required|image|max:25600', // Max 25MB
            ]);

            // Get the uploaded image
            $image = $request->file('file');

            // Log the API URL for debugging purposes
            Log::debug('API URL', ['url' => env('API_URL')]);

            // Send the image to the Flask API
            $response = Http::attach(
                'file',
                file_get_contents($image->getRealPath()), // Get the file contents safely
                $image->getClientOriginalName()
            )->post(env('API_URL') . '/image-to-text');
            // dd($response);
            // Log the API response for debugging purposes
            Log::debug('External API Response', ['status' => $response->status(), 'body' => $response->body()]);

            // Check if the response from the Flask API is successful
            if ($response->successful()) {
                // Return the extracted text from the API response
                $data = $response->json(); // Convert the JSON response to an array
                return response()->json([
                    'extracted_text' => $data['extracted_text']
                ]);
            } else {
                // Log error details if the API call failed
                Log::error('Text extraction API failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return response()->json(['error' => 'Failed to extract text from the image'], 500);
            }
        } catch (\Exception $e) {
            // Log any exception that occurs during the process
            Log::error('Exception in imageToText', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['error' => 'Server error', 'details' => $e->getMessage()], 500);
        }
    }

    public function convertImageToWord(Request $request)
    {
        // Make sure you have the file uploaded
        $file = $request->file('image');

        // Send the file to the Flask API
        $response = Http::attach(
            'file',
            file_get_contents($file->getRealPath()),
            $file->getClientOriginalName()
        )->post('http://127.0.0.1:5000/api/image-to-word');


        // Check if the request was successful
        if ($response->successful()) {
            // Save the received Word document to storage
            $filename = 'converted_' . time() . '.docx';
            Storage::disk('words')->put($filename, $response->body());

            // Return the URL to the file or a success message
            return response()->json([
                'message' => 'File converted successfully!',
                'file_url' => 'public/uploads/word_files/' . $filename
            ]);
        } else {
            return response()->json(['error' => 'Error converting image to Word.'], 400);
        }
    }

    public function mergePDF(Request $request)
    {
        // Validate the uploaded files
        $request->validate([
            'pdfs.*' => 'required|mimes:pdf|max:25000', // max 25MB each PDF
        ]);

        $pdfs = $request->file('pdfs');

        // Prepare an array to hold the PDFs
        $pdfsToMerge = [];

        foreach ($pdfs as $pdf) {
            $pdfsToMerge[] = $pdf->getPathname(); // Add PDF file path to array
        }

        // Use a package like PDFMerger or similar for merging the PDFs
        $pdfMerger = new \PDFMerger();

        foreach ($pdfsToMerge as $pdfPath) {
            $pdfMerger->addPDF($pdfPath);
        }

        // Output the merged PDF
        $mergedPDF = $pdfMerger->merge(); // Or save it to disk if needed

        // Return the merged PDF as a download
        return response()->stream(function () use ($mergedPDF) {
            echo $mergedPDF;
        }, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="merged.pdf"',
        ]);
    }
}
