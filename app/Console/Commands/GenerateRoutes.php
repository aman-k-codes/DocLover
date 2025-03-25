<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateRoutes extends Command
{
    protected $signature = 'make:routes {controller=DocumentController} {--web}';
    protected $description = 'Generate routes for all view functions inside the specified controller';

    public function handle()
    {
        $controllerName = $this->argument('controller');
        $routeFile = $this->option('web') ? base_path('routes/web.php') : base_path('routes/api.php');

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
                'collage',
                'resize',
                'passport-size-photo',
                'photo-clarity-enhancement',
                'background-change',
                'resume-maker',
                'photo-size-compression',
                'image-to-text-conversion',
                'sign-picker'
            ],
            'OrganizePDF' => [
                'merge-pdf',
                'split-pdf',
                'rotate-pdf',
                'delete-pdf-pages'
            ],
            'ConvertFromPDF' => [
                'pdf-to-word',
                'pdf-to-excel',
                'pdf-to-ppt'
            ],
            'ConvertToPDF' => [
                'word-to-pdf',
                'excel-to-pdf',
                'ppt-to-pdf'
            ],
            'SignAndSecure' => [
                'sign-pdf',
                'protect-pdf',
                'unlock-pdf'
            ]
        ];

        $routes = "\n// Auto-generated routes for {$controllerName}\n";
        foreach ($folders as $folder => $files) {
            foreach ($files as $file) {
                $functionName = str_replace('-', '_', $file);
                $routePath = str_replace('_', '-', $functionName);

                $routes .= "Route::get('/{$routePath}', [{$controllerName}::class, '{$functionName}'])->name('{$routePath}');\n";
            }
        }

        // Append routes to web.php or api.php
        File::append($routeFile, $routes);

        $this->info("Routes added to " . ($this->option('web') ? 'web.php' : 'api.php'));
    }
}
