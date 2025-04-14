<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumeTemplatesController extends Controller
{
    public function index(Request $request, $id)
    {
        $url = base64_decode($id);
        $cleanUrl = trim($url, '.');
        $path = parse_url($cleanUrl, PHP_URL_PATH);
        $parts = explode('/', $path);
        $lastFolder = $parts[count($parts) - 2];
        $fileName = trim(preg_replace('/\s+/', '', end($parts)), '.');

        return $this->downloadResume();
        // if ($lastFolder == 'two-column') {
        //     if ($fileName == 'tclm(1).jpg') {
        //         return $this->downloadResume();
        //     }
        // }
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
}
