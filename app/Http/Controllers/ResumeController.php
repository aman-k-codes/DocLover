<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('Pages.resume_maker.resume-home');
    }

    public function ResumeTemplate()
    {
        return view('Pages.resume_maker.resume-template');
    }
}
