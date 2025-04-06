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


class DocsController extends Controller
{
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


    public function removeBG(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:25600', // max 25MB
        ]);

        $image = $request->file('image');
        $inputPath = storage_path('app/temp_input.png');
        $outputPath = storage_path('app/temp_output.png');

        $image->move(storage_path('app'), 'temp_input.png');

        $rembgPath = 'C:\\Users\\amans\\AppData\\Roaming\\Python\\Python313\\Scripts\\rembg.exe';
        $process = new Process([$rembgPath, 'i', $inputPath, $outputPath]);
        $process->run();

        if (!$process->isSuccessful()) {
            return response()->json([
                'error' => 'Background removal failed.',
                'message' => $process->getErrorOutput()
            ], 500);
        }

        return response()->download($outputPath, 'no-bg.png', [
            'Content-Type' => 'image/png'
        ])->deleteFileAfterSend(true);
    }



    public function convertPDFtoWord(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|file|mimes:pdf|max:25600',
        ]);

        $pdf = $request->file('pdf_file');

        // Temporary logic – replace with real PDF-to-Word logic
        $wordContent = '<h1>This is dummy Word content from PDF</h1>';
        $fileName = 'converted_' . time() . '.docx';

        $tempPath = storage_path("app/public/$fileName");
        file_put_contents($tempPath, $wordContent);

        return response()->download($tempPath)->deleteFileAfterSend(true);
    }
}
