<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('pages.home');
    }

    public function AllTools()
    {
        return view('pages.alltools');
    }

    public function AboutUs(){
        return view('pages.footer.about-us');
    }

    public function Contact(){
        return view('pages.footer.contact-us');
    }

    public function Privacy(){
        return view('pages.footer.privacy-policy');
    }
    public function Terms(){
        return view('pages.footer.terms');
    }
}
