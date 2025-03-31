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
}
