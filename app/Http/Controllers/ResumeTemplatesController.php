<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ResumeTemplatesController extends Controller
{

    public function collectAllData(Request $request)
    {

        // dd($request->all());
        $path = $request->file('photo')->store('', 'uploads');
        // Store all other form data except the photo
        Cache::put('resume_data', $request->except('photo'), now()->addMinutes(60));
        // Store photo path separately
        Cache::put('photo', $path, now()->addMinutes(60));
        return response()->json(['message' => 'Data cached successfully']);
    }

    public function index(Request $request, $id)
    {
        // $url = base64_decode($id);
        // $cleanUrl = trim($url, '.');
        // $path = parse_url($cleanUrl, PHP_URL_PATH);
        // $parts = explode('/', $path);
        // $lastFolder = $parts[count($parts) - 2];
        // $fileName = trim(preg_replace('/\s+/', '', end($parts)), '.');

        // return $this->downloadResume();

        // if ($lastFolder == 'two-column') {
        //     if ($fileName == 'tclm(1).jpg') {
        //         return $this->downloadResume();
        //     }
        // }

        return view('resumemaker.resume-pannel');
    }


    public function downloadResume()
    {
        $html = view('resumemaker.templates.google-docs.gd(18)png')->render();

        $pdf = Pdf::loadHTML($html)
            ->setPaper('A4', 'portrait')
            ->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0)
            ->setOption('margin-left', 0)
            ->setOption('margin-right', 0);

        return $pdf->download('doclover.pdf');
    }

    public function preview()
    {
        return view('resumemaker.templates.ats.ats(12)png');
    }
}
