<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('Pages.ResumeMaker.resume-home');
    }

    public function ResumeTemplate()
    {
        return view('Pages.ResumeMaker.resume-template');
    }
}
