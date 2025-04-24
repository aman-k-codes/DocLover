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
                'background-change',
                // 'resume-maker',
                'photo-size-compression',
                'image-to-text-conversion',
                'sign-picker'
            ],
            'ConvertFromPDF' => [
                // 'pdf-to-word',
                'pdf-to-excel',
                'pdf-to-ppt'
            ],
            'ConvertToPDF' => [
                'word-to-pdf',
            ],
        ];

        $functions = "";
        foreach ($folders as $folder => $files) {
            foreach ($files as $file) {
                $functionName = str_replace('-', '_', $file);
                $functions .= <<<PHP

    public function {$functionName}()
    {
        return view('Pages.{$folder}.{$file}');
    }
PHP;
            }
        }

        // Read the current controller file
        $controllerContent = File::get($controllerPath);

        // Insert functions before the closing bracket of the class
        $controllerContent = preg_replace('/}\s*$/', $functions . "\n}", $controllerContent);

        // Save the modified controller
        File::put($controllerPath, $controllerContent);

        $this->info("View functions added to {$controllerName}.php");
    }
}
