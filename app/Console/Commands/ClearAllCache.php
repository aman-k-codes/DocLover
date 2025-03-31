<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearAllCache extends Command
{
    protected $signature = 'clear:all';
    protected $description = 'Clear application, config, route, view, and compiled cache';

    public function handle()
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('clear-compiled');
        $this->call('storage:link');


        $this->info('All caches cleared successfully.');
    }
}
