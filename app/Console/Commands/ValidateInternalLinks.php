<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class ValidateInternalLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'validate:internal-links';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Validate internal links in Blade views against defined routes';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting internal link validation...');
        $this->newLine();

        $viewsDir = resource_path('views');
        $bladeFiles = File::allFiles($viewsDir);
        
        $allLinks = [];
        $brokenLinks = [];
        $validLinks = 0;
        
        // Get all registered route names
        $registeredRoutes = collect(Route::getRoutes())->map(function ($route) {
            return $route->getName();
        })->filter()->values()->toArray();

        $this->info('Found ' . count($registeredRoutes) . ' registered routes');
        $this->newLine();

        foreach ($bladeFiles as $file) {
            $content = File::get($file->getPathname());
            $relativePath = str_replace($viewsDir . '/', '', $file->getPathname());
            
            // Find route() calls
            preg_match_all("/route\(['\"]([^'\"]+)['\"]\)/", $content, $matches);
            
            if (!empty($matches[1])) {
                foreach ($matches[1] as $routeName) {
                    $key = $routeName . '|' . $relativePath;
                    
                    if (!isset($allLinks[$key])) {
                        $allLinks[$key] = [
                            'route' => $routeName,
                            'file' => $relativePath,
                            'exists' => in_array($routeName, $registeredRoutes)
                        ];
                        
                        if (!$allLinks[$key]['exists']) {
                            $brokenLinks[] = $allLinks[$key];
                        } else {
                            $validLinks++;
                        }
                    }
                }
            }
        }

        // Display results
        $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->info('Link Validation Summary:');
        $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->line('Total unique route references: ' . count($allLinks));
        $this->line('Valid links: ' . $validLinks);
        $this->line('Broken links: ' . count($brokenLinks));

        if (!empty($brokenLinks)) {
            $this->newLine();
            $this->warn('Broken Links Found:');
            $this->newLine();
            
            foreach ($brokenLinks as $link) {
                $this->line('  ✗ Route: ' . $link['route']);
                $this->line('    File:  ' . $link['file']);
                $this->newLine();
            }
            
            $this->comment('Please check these routes in your routes/web.php or routes/nicepage.php files');
            return Command::FAILURE;
        }

        $this->line('✓ All internal links are valid!');
        return Command::SUCCESS;
    }
}
