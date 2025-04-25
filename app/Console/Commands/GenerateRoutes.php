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
                'photo-clarity-enhancement',
                'background-change',
                'photo-size-compression',
                'image-to-text-conversion',
                'sign-picker'
            ],
            'ConvertFromPDF' => [
                'pdf-to-excel',
                'pdf-to-ppt'
            ],
            'ConvertToPDF' => [
                'word-to-pdf',
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

        // Read current route file content once
        $currentRoutes = File::exists($routeFile) ? File::get($routeFile) : '';

        $routes = "\n// Auto-generated routes for {$controllerName}\n";
        $newRoutes = '';

        foreach ($folders as $folder => $files) {
            foreach ($files as $file) {
                $functionName = str_replace('-', '_', $file);
                $routePath = str_replace('_', '-', $functionName);

                // Check if route already exists
                if (strpos($currentRoutes, "->name('{$routePath}')") !== false) {
                    continue; // Skip if the route is already defined
                }

                $newRoutes .= "Route::get('/{$routePath}', [{$controllerName}::class, '{$functionName}'])->name('{$routePath}');\n";
            }
        }

        // Only append if there are new routes
        if (!empty($newRoutes)) {
            File::append($routeFile, $routes . $newRoutes);
            $this->info("Routes added to " . ($this->option('web') ? 'web.php' : 'api.php'));
        } else {
            $this->info("No new routes to add.");
        }

    }
}
