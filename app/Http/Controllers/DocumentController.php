<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //

    public function pdf_to_zip()
    {
        return view('pages.fileconversions.pdf-to-zip');
    }
    public function pdf_to_doc()
    {
        return view('pages.fileconversions.pdf-to-doc');
    }
    public function pdf_to_jpg()
    {
        return view('pages.fileconversions.pdf-to-jpg');
    }
    public function pdf_to_html()
    {
        return view('pages.fileconversions.pdf-to-html');
    }
    public function pdf_to_xl()
    {
        return view('pages.fileconversions.pdf-to-xl');
    }
    public function jpg_to_png()
    {
        return view('pages.fileconversions.jpg-to-png');
    }
    public function png_to_jpg()
    {
        return view('pages.fileconversions.png-to-jpg');
    }
    public function jpg_to_doc()
    {
        return view('pages.fileconversions.jpg-to-doc');
    }
    public function jpg_to_xl()
    {
        return view('pages.fileconversions.jpg-to-xl');
    }
    public function crop()
    {
        return view('pages.imageanddocumentprocessing.crop');
    }
    public function collage()
    {
        return view('pages.imageanddocumentprocessing.collage');
    }
    public function resize()
    {
        return view('pages.imageanddocumentprocessing.resize');
    }
    public function passport_size_photo()
    {
        return view('pages.imageanddocumentprocessing.passport-size-photo');
    }
    public function photo_clarity_enhancement()
    {
        return view('pages.imageanddocumentprocessing.photo-clarity-enhancement');
    }
    public function background_change()
    {
        return view('pages.imageanddocumentprocessing.background-change');
    }
    public function resume_maker()
    {
        return view('pages.imageanddocumentprocessing.resume-maker');
    }
    public function photo_size_compression()
    {
        return view('pages.imageanddocumentprocessing.photo-size-compression');
    }
    public function image_to_text_conversion()
    {
        return view('pages.imageanddocumentprocessing.image-to-text-conversion');
    }
    public function sign_picker()
    {
        return view('pages.imageanddocumentprocessing.sign-picker');
    }
    public function merge_pdf()
    {
        return view('pages.organizepdf.merge-pdf');
    }
    public function split_pdf()
    {
        return view('pages.organizepdf.split-pdf');
    }
    public function rotate_pdf()
    {
        return view('pages.organizepdf.rotate-pdf');
    }
    public function delete_pdf_pages()
    {
        return view('pages.organizepdf.delete-pdf-pages');
    }
    public function pdf_to_word()
    {
        return view('pages.convertfrompdf.pdf-to-word');
    }
    public function pdf_to_excel()
    {
        return view('pages.convertfrompdf.pdf-to-excel');
    }
    public function pdf_to_ppt()
    {
        return view('pages.convertfrompdf.pdf-to-ppt');
    }
    public function word_to_pdf()
    {
        return view('pages.converttopdf.word-to-pdf');
    }
    public function excel_to_pdf()
    {
        return view('pages.converttopdf.excel-to-pdf');
    }
    public function ppt_to_pdf()
    {
        return view('pages.converttopdf.ppt-to-pdf');
    }
    public function sign_pdf()
    {
        return view('pages.signandsecure.sign-pdf');
    }
    public function protect_pdf()
    {
        return view('pages.signandsecure.protect-pdf');
    }
    public function unlock_pdf()
    {
        return view('pages.signandsecure.unlock-pdf');
    }
}
