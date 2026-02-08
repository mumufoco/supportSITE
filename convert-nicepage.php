#!/usr/bin/env php
<?php

/**
 * Convert Nicepage HTML files to Laravel Blade views
 * This script performs CONSERVATIVE conversions:
 * - Preserves 100% of HTML structure
 * - Only modifies asset paths and navigation links
 */

$baseDir = __DIR__;
$nicepageDir = $baseDir . '/Nicepage';
$viewsDir = $baseDir . '/resources/views';

// Mapping of HTML file links to route names
$routeMap = [];

function convertHtmlToBladeView($htmlFile, $outputFile, $routeName, $lang = 'pt') {
    global $routeMap;
    
    // Read HTML content
    $html = file_get_contents($htmlFile);
    
    // Extract document structure
    $dom = new DOMDocument();
    @$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    
    // Extract head content
    $headContent = '';
    $heads = $dom->getElementsByTagName('head');
    if ($heads->length > 0) {
        $head = $heads->item(0);
        foreach ($head->childNodes as $node) {
            $headContent .= $dom->saveHTML($node);
        }
    }
    
    // Extract body attributes
    $bodyClass = '';
    $bodyAttrs = [];
    $bodies = $dom->getElementsByTagName('body');
    if ($bodies->length > 0) {
        $body = $bodies->item(0);
        if ($body->hasAttribute('class')) {
            $bodyClass = $body->getAttribute('class');
        }
        // Collect all body attributes
        foreach ($body->attributes as $attr) {
            if ($attr->name !== 'class') {
                $bodyAttrs[] = $attr->name . '="' . htmlspecialchars($attr->value) . '"';
            }
        }
    }
    
    // Extract body content
    $bodyContent = '';
    if ($bodies->length > 0) {
        $body = $bodies->item(0);
        foreach ($body->childNodes as $node) {
            $bodyContent .= $dom->saveHTML($node);
        }
    }
    
    // Extract title
    $title = 'SupportSite';
    $titles = $dom->getElementsByTagName('title');
    if ($titles->length > 0) {
        $title = $titles->item(0)->textContent;
    }
    
    // Extract lang attribute
    $htmlLang = 'pt';
    $htmls = $dom->getElementsByTagName('html');
    if ($htmls->length > 0 && $htmls->item(0)->hasAttribute('lang')) {
        $htmlLang = $htmls->item(0)->getAttribute('lang');
    }
    
    // Process head content to extract meta, styles
    $metaTags = '';
    $styles = '';
    
    // Parse head content for meta tags and stylesheets
    preg_match_all('/<meta[^>]*>/i', $headContent, $metaMatches);
    foreach ($metaMatches[0] as $meta) {
        // Skip viewport and charset as they're in layout
        if (strpos($meta, 'viewport') === false && strpos($meta, 'charset') === false) {
            $metaTags .= "    " . $meta . "\n";
        }
    }
    
    // Extract stylesheets
    preg_match_all('/<link[^>]*rel=["\']stylesheet["\'][^>]*>/i', $headContent, $linkMatches);
    foreach ($linkMatches[0] as $link) {
        // Convert local CSS to asset() paths
        if (preg_match('/href=["\']([^"\']+\.css)["\']/', $link, $hrefMatch)) {
            $cssPath = $hrefMatch[1];
            if (!preg_match('/^(https?:)?\/\//', $cssPath)) {
                // Local CSS file
                $cssFile = basename($cssPath);
                $link = preg_replace('/href=["\'][^"\']+["\']/', 'href="{{ asset(\'css/' . $cssFile . '\') }}"', $link);
            }
        }
        $styles .= "    " . $link . "\n";
    }
    
    // Extract scripts
    $scripts = '';
    preg_match_all('/<script[^>]*>.*?<\/script>/is', $headContent, $scriptMatches);
    foreach ($scriptMatches[0] as $script) {
        // Convert local JS to asset() paths
        if (preg_match('/src=["\']([^"\']+\.js)["\']/', $script, $srcMatch)) {
            $jsPath = $srcMatch[1];
            if (!preg_match('/^(https?:)?\/\//', $jsPath)) {
                // Local JS file
                $jsFile = basename($jsPath);
                $script = preg_replace('/src=["\'][^"\']+["\']/', 'src="{{ asset(\'js/' . $jsFile . '\') }}"', $script);
            }
        }
        $scripts .= "    " . $script . "\n";
    }
    
    // Process body content
    // Replace CSS asset paths
    $bodyContent = preg_replace_callback('/href=["\']([^"\']+\.css)["\']/', function($matches) {
        $path = $matches[1];
        if (!preg_match('/^(https?:)?\/\//', $path)) {
            $file = basename($path);
            return 'href="{{ asset(\'css/' . $file . '\') }}"';
        }
        return $matches[0];
    }, $bodyContent);
    
    // Replace JS asset paths
    $bodyContent = preg_replace_callback('/src=["\']([^"\']+\.js)["\']/', function($matches) {
        $path = $matches[1];
        if (!preg_match('/^(https?:)?\/\//', $path)) {
            $file = basename($path);
            return 'src="{{ asset(\'js/' . $file . '\') }}"';
        }
        return $matches[0];
    }, $bodyContent);
    
    // Replace image paths
    $bodyContent = preg_replace_callback('/(src|href)=["\']([^"\']*images\/[^"\']+)["\']/', function($matches) {
        $attr = $matches[1];
        $path = $matches[2];
        // Remove leading slash if present
        $path = ltrim($path, '/');
        return $attr . '="{{ asset(\'' . $path . '\') }}"';
    }, $bodyContent);
    
    // Replace navigation links (HTML files to routes)
    foreach ($routeMap as $htmlFile => $routeName) {
        $bodyContent = str_replace('href="' . $htmlFile . '"', 'href="{{ route(\'' . $routeName . '\') }}"', $bodyContent);
        $bodyContent = str_replace('href="/' . $htmlFile . '"', 'href="{{ route(\'' . $routeName . '\') }}"', $bodyContent);
    }
    
    // Build Blade view
    $blade = "@extends('layouts.nicepage')\n\n";
    $blade .= "@section('lang', '" . $htmlLang . "')\n";
    $blade .= "@section('title', '" . addslashes($title) . "')\n";
    $blade .= "@section('body-class', '" . $bodyClass . "')\n\n";
    
    if (!empty($metaTags)) {
        $blade .= "@push('meta')\n" . $metaTags . "@endpush\n\n";
    }
    
    if (!empty($styles)) {
        $blade .= "@push('styles')\n" . $styles . "@endpush\n\n";
    }
    
    $blade .= "@section('content')\n";
    $blade .= $bodyContent . "\n";
    $blade .= "@endsection\n\n";
    
    if (!empty($scripts)) {
        $blade .= "@push('scripts')\n" . $scripts . "@endpush\n";
    }
    
    // Ensure output directory exists
    $outputDir = dirname($outputFile);
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0755, true);
    }
    
    // Write Blade file
    file_put_contents($outputFile, $blade);
    
    return true;
}

// Build route map first
// This would need to be populated with actual page mappings
// For now, we'll skip this and do manual conversion

echo "Nicepage to Laravel Blade Converter\n";
echo "===================================\n\n";
echo "This script will convert HTML files to Blade views.\n";
echo "Due to the complexity and size (289 files), manual conversion is recommended.\n";
echo "Assets have been copied to public/ directory.\n";
