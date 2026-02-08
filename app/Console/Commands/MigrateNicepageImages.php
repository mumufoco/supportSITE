<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MigrateNicepageImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:nicepage-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate images from Nicepage directory to public/images directory';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting Nicepage image migration...');
        $this->newLine();

        $nicepageDir = base_path('Nicepage');
        $publicImagesDir = public_path('images');

        // Check if Nicepage directory exists
        if (!File::exists($nicepageDir)) {
            $this->error('Nicepage directory not found at: ' . $nicepageDir);
            return Command::FAILURE;
        }

        // Create public/images directory if it doesn't exist
        if (!File::exists($publicImagesDir)) {
            File::makeDirectory($publicImagesDir, 0755, true);
            $this->info('Created public/images directory');
        }

        // Find all image files in Nicepage directory
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'ico'];
        $imageFiles = [];
        
        foreach ($imageExtensions as $ext) {
            $found = File::glob($nicepageDir . '/**/*.' . $ext);
            $imageFiles = array_merge($imageFiles, $found);
        }

        if (empty($imageFiles)) {
            $this->warn('No image files found in Nicepage directory');
            $this->info('Checking for images referenced in HTML/Blade files...');
            $this->checkReferencedImages();
            return Command::SUCCESS;
        }

        // Copy images
        $copiedCount = 0;
        $skippedCount = 0;
        $errors = [];

        foreach ($imageFiles as $sourceFile) {
            $relativePath = str_replace($nicepageDir . '/', '', $sourceFile);
            $destinationFile = $publicImagesDir . '/' . basename($sourceFile);

            // Check if file already exists
            if (File::exists($destinationFile)) {
                $skippedCount++;
                continue;
            }

            try {
                File::copy($sourceFile, $destinationFile);
                $copiedCount++;
                $this->line('✓ Copied: ' . basename($sourceFile));
            } catch (\Exception $e) {
                $errors[] = [
                    'file' => basename($sourceFile),
                    'error' => $e->getMessage()
                ];
            }
        }

        // Display summary
        $this->newLine();
        $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->info('Migration Summary:');
        $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->line('Total images found: ' . count($imageFiles));
        $this->line('Images copied: ' . $copiedCount);
        $this->line('Images skipped (already exist): ' . $skippedCount);
        
        if (!empty($errors)) {
            $this->line('Errors: ' . count($errors));
            $this->newLine();
            $this->error('Failed to copy the following files:');
            foreach ($errors as $error) {
                $this->line('  - ' . $error['file'] . ': ' . $error['error']);
            }
        }

        $this->newLine();
        $this->info('Checking for referenced images in Blade views...');
        $this->checkReferencedImages();

        return Command::SUCCESS;
    }

    /**
     * Check for images referenced in Blade views
     */
    protected function checkReferencedImages(): void
    {
        $viewsDir = resource_path('views');
        $publicImagesDir = public_path('images');
        $bladeFiles = File::allFiles($viewsDir);
        
        $referencedImages = [];
        $missingImages = [];

        foreach ($bladeFiles as $file) {
            $content = File::get($file->getPathname());
            
            // Find all image references using asset('images/...')
            preg_match_all("/asset\(['\"]images\/([^'\"]+)['\"]\)/", $content, $matches);
            
            if (!empty($matches[1])) {
                foreach ($matches[1] as $imagePath) {
                    if (!in_array($imagePath, $referencedImages)) {
                        $referencedImages[] = $imagePath;
                        
                        $fullPath = $publicImagesDir . '/' . $imagePath;
                        if (!File::exists($fullPath)) {
                            $missingImages[] = $imagePath;
                        }
                    }
                }
            }
        }

        if (empty($referencedImages)) {
            $this->line('No image references found in Blade views');
            return;
        }

        $this->newLine();
        $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->info('Referenced Images Report:');
        $this->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->line('Total unique images referenced: ' . count($referencedImages));
        $this->line('Missing images: ' . count($missingImages));

        if (!empty($missingImages)) {
            $this->newLine();
            $this->warn('The following images are referenced but not found:');
            foreach ($missingImages as $image) {
                $this->line('  ✗ ' . $image);
            }
            $this->newLine();
            $this->comment('You may need to:');
            $this->comment('1. Create placeholder images for these files');
            $this->comment('2. Check if images are embedded as data URIs in CSS');
            $this->comment('3. Obtain the original images from Nicepage export');
        } else {
            $this->line('✓ All referenced images are present');
        }
    }
}
