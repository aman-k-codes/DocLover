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
}
