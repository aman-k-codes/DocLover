<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class TransferFileController extends Controller
{
    public function index()
    {
        return view('sw.pages.transfer-file.index');
    }

    public function uploadForTransfer(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:102400', // 100MB max
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $uniqueName = Str::random(10) . '_' . $originalName;

        // Store the file in 'uploads' disk
        $path = $file->storeAs('', $uniqueName, 'uploads');

        // Generate the public URL
        $publicUrl = Storage::disk('uploads')->url($uniqueName);

        return response()->json([
            'success' => true,
            'original_name' => $originalName,
            'file_url' => $publicUrl,
        ]);
    }

    public function downloadTransfer(Request $request, $filename)
    {
        if (! $request->hasValidSignature()) {
            abort(403, 'Invalid or expired link.');
        }

        if (!Storage::disk('uploads')->exists($filename)) {
            abort(404, 'File not found.');
        }

        $filePath = Storage::disk('uploads')->path($filename);
        return response()->download($filePath, $filename);
    }
}
