<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function PDFtoPNG()
    {
        return view('Pages.pdf-to-png');
    }
}
