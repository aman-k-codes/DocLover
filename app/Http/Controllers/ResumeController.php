<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;


class ResumeController extends Controller
{
    public function index()
    {
        return view('resumemaker.resume-home');
    }

    public function ResumeTemplate()
    {
        return view('resumemaker.resume-template');
    }


}
