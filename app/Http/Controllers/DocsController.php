<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'image' => 'required|mimes:jpeg|max:10240', // Max size 10MB
        ]);

        $jpgFile = $request->file('image');
        $pngName = pathinfo($jpgFile->getClientOriginalName(), PATHINFO_FILENAME) . '.png';

        $image = imagecreatefromjpeg($jpgFile->getRealPath());
        if (!$image) {
            return response()->json(['error' => 'Failed to process image.'], 500);
        }

        $pngPath = storage_path("app/public/{$pngName}");
        imagepng($image, $pngPath);
        imagedestroy($image);

        return response()->download($pngPath)->deleteFileAfterSend(true);
    }

}
