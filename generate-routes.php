#!/usr/bin/env php
<?php

/**
 * Generate Laravel routes for all converted Blade views
 * Creates route definitions for routes/web.php
 */

$viewsDir = __DIR__ . '/resources/views';
$languages = ['pt', 'en', 'es'];

$routes = [];

// Function to convert blade filename to route name
function bladeToRouteName($filename) {
    return str_replace('.blade.php', '', $filename);
}

// Scan each language directory
foreach ($languages as $lang) {
    $langDir = $viewsDir . '/' . $lang;
    if (!is_dir($langDir)) {
        continue;
    }
    
    $files = glob($langDir . '/*.blade.php');
    foreach ($files as $file) {
        $filename = basename($file);
        $routeName = bladeToRouteName($filename);
        $viewName = "$lang.$routeName";
        
        $routes[$lang][] = [
            'name' => $routeName,
            'view' => $viewName,
            'path' => '/' . $routeName
        ];
    }
}

// Generate routes file content
echo "<?php\n\n";
echo "use Illuminate\\Support\\Facades\\Route;\n\n";
echo "/*\n";
echo "|--------------------------------------------------------------------------\n";
echo "| Nicepage Routes\n";
echo "|--------------------------------------------------------------------------\n";
echo "|\n";
echo "| Auto-generated routes for Nicepage HTML pages converted to Blade views.\n";
echo "| Generated on: " . date('Y-m-d H:i:s') . "\n";
echo "|\n";
echo "*/\n\n";

// Root redirect
echo "// Root redirect\n";
echo "Route::get('/', function () {\n";
echo "    return redirect()->route('pt.pagina-1');\n";
echo "})->name('home');\n\n";

// Generate routes for each language
foreach ($languages as $lang) {
    if (!isset($routes[$lang])) {
        continue;
    }
    
    $langName = [
        'pt' => 'Portuguese',
        'en' => 'English',
        'es' => 'Spanish'
    ][$lang];
    
    echo "// $langName Routes\n";
    echo "Route::prefix('$lang')->name('$lang.')->group(function () {\n";
    
    foreach ($routes[$lang] as $route) {
        $routeName = $route['name'];
        $viewName = $route['view'];
        echo "    Route::get('$routeName', fn() => view('$viewName'))->name('$routeName');\n";
    }
    
    echo "});\n\n";
}

echo "// Keep existing admin routes and other application routes below\n";
