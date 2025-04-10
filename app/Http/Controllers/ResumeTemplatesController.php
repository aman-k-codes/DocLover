<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\SimpleType\Jc;
use PhpOffice\PhpWord\Shared\Html;
use Spatie\Browsershot\Browsershot;

class ResumeTemplatesController extends Controller
{
    public function index(Request $request, $id)
    {
        $url = base64_decode($id);
        $cleanUrl = trim($url, '.');
        $path = parse_url($cleanUrl, PHP_URL_PATH);
        $parts = explode('/', $path);
        $lastFolder = $parts[count($parts) - 2];
        $fileName = trim(preg_replace('/\s+/', '', end($parts)), '.');

      
        if ($lastFolder == 'two-column') {
            if ($fileName == 'tclm(1).jpg') {
                return $this->downloadResume();
            }
        }
    }

    public function downloadResume()
    {
        $html = view('resumemaker.templates.two-column.tclm(1)')->render();

        $pdfPath = storage_path('Jack_William_Resume.pdf');

        Browsershot::html($html)
            ->format('A4')
            ->margins(10, 10, 10, 10)
            ->waitUntilNetworkIdle()
            ->save($pdfPath);

        return response()->download($pdfPath)->deleteFileAfterSend(true);
    }

    public function downloadResume1()
    {
        $phpWord = new PhpWord();

        // Reduce margins to use full page height and width
        $sectionStyle = [
            'orientation' => 'portrait',
            'marginTop' => 200,
            'marginBottom' => 200,
            'marginLeft' => 200,
            'marginRight' => 200,
        ];
        $section = $phpWord->addSection($sectionStyle);

        // Define font styles
        $phpWord->addFontStyle('headingLeft', ['bold' => true, 'color' => 'FFFFFF', 'size' => 14]);
        $phpWord->addFontStyle('textLeft', ['color' => 'FFFFFF', 'size' => 11]);
        $phpWord->addFontStyle('headingRight', ['bold' => true, 'color' => '000000', 'size' => 14]);
        $phpWord->addFontStyle('textRight', ['color' => '000000', 'size' => 11]);

        $bgColor = '1F2937'; // Dark gray background for left column

        // Table width 100%, exact height for full vertical space
        $table = $section->addTable([
            'width' => 100 * 50,
            'unit' => 'pct',
            'layout' => \PhpOffice\PhpWord\Style\Table::LAYOUT_FIXED,
        ]);

        $table->addRow(null, ['tblHeaderRepeat' => true, 'exactHeight' => true]);

        // LEFT COLUMN
        $leftCell = $table->addCell(40 * 50, ['bgColor' => $bgColor, 'valign' => 'top']);

        $leftCell->addText('JOHN SMITH', 'headingLeft');
        $leftCell->addText('Chief Executive Officer', 'textLeft');
        $leftCell->addTextBreak(1);
        $leftCell->addText('📧 johnsmith@beamjobs.com', 'textLeft');
        $leftCell->addText('📞 (123) 456-7890', 'textLeft');
        $leftCell->addText('📍 Houston, TX', 'textLeft');
        $leftCell->addText('🔗 linkedin.com/in/johnsmith', 'textLeft');
        $leftCell->addTextBreak(1);
        $leftCell->addText('OBJECTIVE', 'headingLeft');
        $leftCell->addText('Resume objective is an eye-catching statement...', 'textLeft');
        $leftCell->addTextBreak(1);
        $leftCell->addText('EDUCATION', 'headingLeft');
        $leftCell->addText('B.S. Statistics', 'textLeft');
        $leftCell->addText('University of Maryland', 'textLeft');
        $leftCell->addText('Sep 2006 - Apr 2010', 'textLeft');
        $leftCell->addText('College Park, MD', 'textLeft');
        $leftCell->addTextBreak(1);
        $leftCell->addText('SKILLS', 'headingLeft');
        $leftCell->addText('Leadership, Product Strategy, Agile...', 'textLeft');
        $leftCell->addTextBreak(1);
        $leftCell->addText('CERTS', 'headingLeft');
        $leftCell->addText('PMP, IRN, Product Research, B2B', 'textLeft');

        // RIGHT COLUMN
        $rightCell = $table->addCell(60 * 50, ['valign' => 'top']);

        $rightCell->addText('WORK EXPERIENCE', 'headingRight');
        $rightCell->addTextBreak(0.5);
        $rightCell->addText('Chief Executive Officer', 'headingRight');
        $rightCell->addText('Amazon | Jan 2017 – Current | Houston, TX', 'textRight');
        $rightCell->addText('- Managed a portfolio of product initiatives...', 'textRight');
        $rightCell->addText('- Played an active role in recruitment...', 'textRight');
        $rightCell->addText('- Managed 4 junior PMs and 6 mid-level PMs...', 'textRight');
        $rightCell->addTextBreak(1);
        $rightCell->addText('Department Head', 'headingRight');
        $rightCell->addText('Shopify | Jan 2013 – Jan 2017 | Houston, TX', 'textRight');
        $rightCell->addText('- Performed cohort analysis that identified...', 'textRight');
        $rightCell->addText('- Led development for a new B2C SaaS product...', 'textRight');
        $rightCell->addTextBreak(1);
        $rightCell->addText('Product Manager', 'headingRight');
        $rightCell->addText('Ebay | Apr 2010 – Jan 2013 | Houston, TX', 'textRight');
        $rightCell->addText('- Implemented referral program...', 'textRight');
        $rightCell->addText('- Implemented long-term pricing experiment...', 'textRight');

        // Save file
        $fileName = 'John_Smith_Resume.docx';
        $filePath = storage_path($fileName);
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($filePath);

        return response()->download($filePath)->deleteFileAfterSend(true);
    }

}
