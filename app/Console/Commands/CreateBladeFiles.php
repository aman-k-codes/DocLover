<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateBladeFiles extends Command
{
    protected $signature = 'make:blades';
    protected $description = 'Create Blade template files for document conversion tools';

    public function handle()
    {
        $folders = [
            'FileConversions' => [
                'pdf-to-zip',
                'pdf-to-doc',
                'pdf-to-jpg',
                'pdf-to-html',
                'pdf-to-xl',
                'jpg-to-png',
                'png-to-jpg',
                'jpg-to-doc',
                'jpg-to-xl'
            ],
            'ImageAndDocumentProcessing' => [
                'crop',
                'photo-clarity-enhancement',
                'pasport-photo',
                'background-change',
                'photo-size-compression',
                'image-to-text-conversion',
                'sign-picker'
            ],
            'ConvertFromPDF' => [
                'pdf-to-word',
                'pdf-to-excel',
                'pdf-to-ppt'
            ],
            'PDFManagement' => [
                'merge-pdf',
                'split-pdf',
                'rotate-pdf',
                'delete-pdf-pages',
                'extract-pdf-pages',
                'protect-pdf',
                'unlock-pdf',
                'add-watermark',
                'pdf-metadata-editor',
                'pdf-form-filler'
            ],
        ];

        foreach ($folders as $folder => $files) {
            foreach ($files as $file) {
                $path = resource_path("views/Pages/{$folder}/{$file}.blade.php");
                if (!File::exists($path)) {
                    File::ensureDirectoryExists(dirname($path));

                    // Define a basic HTML structure
                    $content = <<<HTML
                    @extends('sw.layout.master')

                    @section('title', 'CraftMyDoc - {$file}')

                    @section('meta_description', 'Convert {$file} easily with CraftMyDoc.')
                    @section('meta_keywords', '{$file}, Document Conversion, File Conversion')

                    @section('content')
                        <div class="container">
                            <h1 class="text-center">{$file}</h1>
                            <p>Use this tool to {$file} efficiently.</p>
                        </div>
                    @endsection
                    HTML;

                    File::put($path, $content);
                    $this->info("Created: resources/views/Pages/{$folder}/{$file}.blade.php");
                } else {
                    $this->warn("Already exists: {$file}.blade.php");
                }
            }
        }
    }
}
