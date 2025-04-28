<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateControllerViews extends Command
{
    protected $signature = 'make:controller-views {controller=DocumentController}';
    protected $description = 'Generate view functions inside a specified controller';

    public function handle()
    {
        $controllerName = $this->argument('controller');
        $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

        if (!File::exists($controllerPath)) {
            $this->error("Controller {$controllerName} does not exist.");
            return;
        }

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

        $functions = "";
        $controllerContent = File::get($controllerPath); // Read once, before loop

        foreach ($folders as $folder => $files) {
            foreach ($files as $file) {
                $functionName = str_replace('-', '_', $file);

                // Check if function already exists
                if (strpos($controllerContent, "function {$functionName}(") !== false) {
                    continue; // Skip if function already exists
                }

                $functions .= <<<PHP

            public function {$functionName}()
            {
                return view('Pages.{$folder}.{$file}');
            }
        PHP;
            }
        }

        // Add functions before the final closing bracket of the class
        if (!empty($functions)) {
            $controllerContent = preg_replace('/}\s*$/', $functions . "\n}", $controllerContent);
            File::put($controllerPath, $controllerContent);
            $this->info("View functions added to {$controllerName}.php");
        } else {
            $this->info("No new functions to add to {$controllerName}.php");
        }

    }
}
