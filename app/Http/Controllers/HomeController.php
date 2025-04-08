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

    public function aboutus(){
        return view('sw.pages.footer.about-us');
    }

    public function contact(){
        return view('sw.pages.footer.contact-us');
    }

    public function privacy(){
        return view('sw.pages.footer.privacy-policy');
    }
    public function terms(){
        return view('sw.pages.footer.terms');
    }
}
