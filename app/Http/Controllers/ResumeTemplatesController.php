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

        if ($request->has('photo')) {
            $path = $request->file('photo')->store('', 'uploads');
            Cache::put('photo', $path, now()->addMinutes(60));
        }
        Cache::put('resume_data', $request->except('photo'), now()->addMinutes(60));
        return redirect()->route('resume.preview');
    }

    public function index(Request $request, $id)
    {
        $url = base64_decode($id);
        $cleanUrl = trim($url, '.');
        $path = parse_url($cleanUrl, PHP_URL_PATH);
        $parts = explode('/', $path);
        $lastFolder = $parts[count($parts) - 2];
        $fileNameWithDot = trim(preg_replace('/\s+/', '', end($parts)), '.');
        [$name, $ext] = explode('.', $fileNameWithDot);
        $fileName = $name . $ext;
        Cache::put('folder', $lastFolder, now()->addMinutes(60));
        Cache::put('template', $fileName, now()->addMinutes(60));
        // dd(Cache::get('folder') . '.' . Cache::get('template'));

        // $pdf = Pdf::loadView('resumemaker.templates.' . Cache::get('folder') . '.' . Cache::get('template')); // you can pass data as second param
        // return $pdf->stream(Cache::get('folder').'_'.Cache::get('template').'_resume.pdf');
        // return view('resumemaker.preview');
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

        return $pdf->download('CraftMyDoc.pdf');
    }

    public function preview()
    {

        return view('resumemaker.preview');
    }

    public function getResumeTemplate()
    {
        return view('resumemaker.templates.' . Cache::get('folder') . '.' . Cache::get('template'));
    }

    public function downloadPDF()
    {
        $pdf = Pdf::loadView('resumemaker.templates.' . Cache::get('folder') . '.' . Cache::get('template')); // you can pass data as second param
        return $pdf->stream('doc_lover_resume.pdf');
    }
}
