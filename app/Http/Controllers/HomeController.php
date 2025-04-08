<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('sw.pages.home');
    }

    public function AllTools()
    {
        return view('sw.pages.alltools');
    }

    public function AboutUs(){
        return view('sw.pages.footer.about-us');
    }

    public function Contact(){
        return view('sw.pages.footer.contact-us');
    }

    public function Privacy(){
        return view('sw.pages.footer.privacy-policy');
    }
    public function Terms(){
        return view('sw.pages.footer.terms');
    }
}
