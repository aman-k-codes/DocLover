<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('Pages.home');
    }

    public function AllTools()
    {
        return view('Pages.alltools');
    }

    public function AboutUs(){
        return view('Pages.Footer.about');
    }

    public function Contact(){
        return view('Pages.Footer.contact');
    }

    public function Privacy(){
        return view('Pages.Footer.privacy-policy');
    }
    public function Terms(){
        return view('Pages.Footer.terms');
    }
}
