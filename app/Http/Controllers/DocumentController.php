<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //

    public function pdf_to_zip()
    {
        return view('Pages.FileConversions.pdf-to-zip');
    }
    public function pdf_to_doc()
    {
        return view('Pages.FileConversions.pdf-to-doc');
    }
    public function pdf_to_jpg()
    {
        return view('Pages.FileConversions.pdf-to-jpg');
    }
    public function pdf_to_html()
    {
        return view('Pages.FileConversions.pdf-to-html');
    }
    public function pdf_to_xl()
    {
        return view('Pages.FileConversions.pdf-to-xl');
    }
    public function jpg_to_png()
    {
        return view('Pages.FileConversions.jpg-to-png');
    }
    public function png_to_jpg()
    {
        return view('Pages.FileConversions.png-to-jpg');
    }
    public function jpg_to_doc()
    {
        return view('Pages.FileConversions.jpg-to-doc');
    }
    public function jpg_to_xl()
    {
        return view('Pages.FileConversions.jpg-to-xl');
    }
    public function crop()
    {
        return view('Pages.ImageAndDocumentProcessing.crop');
    }
    public function collage()
    {
        return view('Pages.ImageAndDocumentProcessing.collage');
    }
    public function resize()
    {
        return view('Pages.ImageAndDocumentProcessing.resize');
    }
    public function passport_size_photo()
    {
        return view('Pages.ImageAndDocumentProcessing.passport-size-photo');
    }
    public function photo_clarity_enhancement()
    {
        return view('Pages.ImageAndDocumentProcessing.photo-clarity-enhancement');
    }
    public function background_change()
    {
        return view('Pages.ImageAndDocumentProcessing.background-change');
    }
    public function resume_maker()
    {
        return view('Pages.ImageAndDocumentProcessing.resume-maker');
    }
    public function photo_size_compression()
    {
        return view('Pages.ImageAndDocumentProcessing.photo-size-compression');
    }
    public function image_to_text_conversion()
    {
        return view('Pages.ImageAndDocumentProcessing.image-to-text-conversion');
    }
    public function sign_picker()
    {
        return view('Pages.ImageAndDocumentProcessing.sign-picker');
    }
    public function merge_pdf()
    {
        return view('Pages.OrganizePDF.merge-pdf');
    }
    public function split_pdf()
    {
        return view('Pages.OrganizePDF.split-pdf');
    }
    public function rotate_pdf()
    {
        return view('Pages.OrganizePDF.rotate-pdf');
    }
    public function delete_pdf_pages()
    {
        return view('Pages.OrganizePDF.delete-pdf-pages');
    }
    public function pdf_to_word()
    {
        return view('Pages.ConvertFromPDF.pdf-to-word');
    }
    public function pdf_to_excel()
    {
        return view('Pages.ConvertFromPDF.pdf-to-excel');
    }
    public function pdf_to_ppt()
    {
        return view('Pages.ConvertFromPDF.pdf-to-ppt');
    }
    public function word_to_pdf()
    {
        return view('Pages.ConvertToPDF.word-to-pdf');
    }
    public function excel_to_pdf()
    {
        return view('Pages.ConvertToPDF.excel-to-pdf');
    }
    public function ppt_to_pdf()
    {
        return view('Pages.ConvertToPDF.ppt-to-pdf');
    }
    public function sign_pdf()
    {
        return view('Pages.SignAndSecure.sign-pdf');
    }
    public function protect_pdf()
    {
        return view('Pages.SignAndSecure.protect-pdf');
    }
    public function unlock_pdf()
    {
        return view('Pages.SignAndSecure.unlock-pdf');
    }
}
