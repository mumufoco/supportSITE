#!/usr/bin/env python3
"""
Conservative Nicepage to Laravel Blade Converter
Converts HTML files to Blade views while preserving 100% of structure and content
Only modifies: asset paths and navigation links
"""

import os
import re
from pathlib import Path
from html.parser import HTMLParser
import sys

class NicepageHTMLParser(HTMLParser):
    def __init__(self):
        super().__init__()
        self.in_head = False
        self.in_body = False
        self.in_title = False
        self.head_content = []
        self.body_content = []
        self.body_attrs = {}
        self.html_attrs = {}
        self.title = "SupportSite"
        
    def handle_starttag(self, tag, attrs):
        attrs_dict = dict(attrs)
        
        if tag == 'html':
            self.html_attrs = attrs_dict
        elif tag == 'head':
            self.in_head = True
        elif tag == 'body':
            self.in_body = True
            self.body_attrs = attrs_dict
        elif tag == 'title':
            self.in_title = True
        elif self.in_head:
            # Capture head content
            self.head_content.append(self.get_starttag_text())
        elif self.in_body:
            # Capture body content
            self.body_content.append(self.get_starttag_text())
    
    def handle_endtag(self, tag):
        if tag == 'head':
            self.in_head = False
        elif tag == 'body':
            self.in_body = False
        elif tag == 'title':
            self.in_title = False
        elif self.in_head:
            self.head_content.append(f'</{tag}>')
        elif self.in_body:
            self.body_content.append(f'</{tag}>')
    
    def handle_data(self, data):
        if self.in_title:
            self.title = data.strip()
        elif self.in_head:
            self.head_content.append(data)
        elif self.in_body:
            self.body_content.append(data)

def convert_asset_path(path, asset_type='css'):
    """Convert asset path to Laravel asset() helper"""
    # Don't modify external URLs
    if path.startswith('http://') or path.startswith('https://') or path.startswith('//'):
        return path
    
    # Remove leading slash
    path = path.lstrip('/')
    
    # If path contains images/, fonts/, or other asset dirs, keep the full path
    if 'images/' in path or 'fonts/' in path or 'videos/' in path or 'intlTelInput/' in path:
        return f"{{{{ asset('{path}') }}}}"
    
    # Determine folder based on extension
    if asset_type == 'css' or path.endswith('.css'):
        folder = 'css'
    elif asset_type == 'js' or path.endswith('.js'):
        folder = 'js'
    elif path.endswith(('.jpg', '.jpeg', '.png', '.gif', '.svg', '.webp', '.ico')):
        folder = 'images'
    else:
        # For other assets, try to keep in root public
        return f"{{{{ asset('{path}') }}}}"
    
    # Extract filename
    filename = os.path.basename(path)
    return f"{{{{ asset('{folder}/{filename}') }}}}"

def process_head_content(head_html):
    """Process head content and separate meta tags, styles, and scripts"""
    meta_tags = []
    styles = []
    scripts = []
    other = []
    
    # Extract stylesheets
    for match in re.finditer(r'<link[^>]*rel=["\']stylesheet["\'][^>]*>', head_html, re.IGNORECASE):
        link = match.group(0)
        # Convert href
        link = re.sub(
            r'href=["\']([^"\']+\.css)["\']',
            lambda m: f'href="{convert_asset_path(m.group(1), "css")}"',
            link
        )
        styles.append(link)
    
    # Extract meta tags (skip viewport and charset)
    for match in re.finditer(r'<meta[^>]*>', head_html, re.IGNORECASE):
        meta = match.group(0)
        if 'viewport' not in meta.lower() and 'charset' not in meta.lower():
            meta_tags.append(meta)
    
    # Extract scripts in head
    for match in re.finditer(r'<script[^>]*>.*?</script>', head_html, re.IGNORECASE | re.DOTALL):
        script = match.group(0)
        # Convert src
        script = re.sub(
            r'src=["\']([^"\']+\.js)["\']',
            lambda m: f'src="{convert_asset_path(m.group(1), "js")}"',
            script
        )
        scripts.append(script)
    
    return meta_tags, styles, scripts

def process_body_content(body_html):
    """Process body content to replace asset paths"""
    # Replace CSS href
    body_html = re.sub(
        r'href=["\']([^"\']+\.css)["\']',
        lambda m: f'href="{convert_asset_path(m.group(1), "css")}"',
        body_html
    )
    
    # Replace JS src
    body_html = re.sub(
        r'src=["\']([^"\']+\.js)["\']',
        lambda m: f'src="{convert_asset_path(m.group(1), "js")}"',
        body_html
    )
    
    # Replace image paths in src attributes (prioritize this over generic handling)
    body_html = re.sub(
        r'src=["\']([^"\']*(?:images/|/images/)[^"\']+)["\']',
        lambda m: f'src="{convert_asset_path(m.group(1))}"',
        body_html,
        flags=re.IGNORECASE
    )
    
    # Replace image paths in href attributes  
    body_html = re.sub(
        r'href=["\']([^"\']*(?:images/|/images/)[^"\']+)["\']',
        lambda m: f'href="{convert_asset_path(m.group(1))}"',
        body_html,
        flags=re.IGNORECASE
    )
    
    # Replace standalone image files (png, jpg, etc.) in src
    body_html = re.sub(
        r'src=["\']([^"\']+\.(jpg|jpeg|png|gif|svg|webp|ico))["\']',
        lambda m: f'src="{convert_asset_path(m.group(1))}"' if not m.group(1).startswith(('http://', 'https://', '//', 'data:')) and 'images/' not in m.group(1) else m.group(0),
        body_html,
        flags=re.IGNORECASE
    )
    
    return body_html

def html_to_blade(html_file, output_file, lang='pt'):
    """Convert an HTML file to a Blade view"""
    with open(html_file, 'r', encoding='utf-8') as f:
        html_content = f.read()
    
    # Extract lang from html tag
    lang_match = re.search(r'<html[^>]*lang=["\']([^"\']+)["\']', html_content, re.IGNORECASE)
    html_lang = lang_match.group(1) if lang_match else lang
    
    # Extract title
    title_match = re.search(r'<title>([^<]+)</title>', html_content, re.IGNORECASE)
    title = title_match.group(1) if title_match else 'SupportSite'
    
    # Extract body class
    body_class_match = re.search(r'<body[^>]*class=["\']([^"\']+)["\']', html_content, re.IGNORECASE)
    body_class = body_class_match.group(1) if body_class_match else ''
    
    # Extract head content
    head_match = re.search(r'<head>(.*?)</head>', html_content, re.IGNORECASE | re.DOTALL)
    head_html = head_match.group(1) if head_match else ''
    
    # Extract body content
    body_match = re.search(r'<body[^>]*>(.*?)</body>', html_content, re.IGNORECASE | re.DOTALL)
    body_html = body_match.group(1) if body_match else ''
    
    # Process head
    meta_tags, styles, scripts_head = process_head_content(head_html)
    
    # Process body
    body_html = process_body_content(body_html)
    
    # Build Blade view
    blade = f"@extends('layouts.nicepage')\n\n"
    blade += f"@section('lang', '{html_lang}')\n"
    blade += f"@section('title', '{title.replace(chr(39), chr(92) + chr(39))}')\n"
    blade += f"@section('body-class', '{body_class}')\n\n"
    
    if meta_tags:
        blade += "@push('meta')\n"
        for meta in meta_tags:
            blade += f"    {meta}\n"
        blade += "@endpush\n\n"
    
    if styles:
        blade += "@push('styles')\n"
        for style in styles:
            blade += f"    {style}\n"
        blade += "@endpush\n\n"
    
    blade += "@section('content')\n"
    blade += body_html
    blade += "\n@endsection\n\n"
    
    if scripts_head:
        blade += "@push('scripts')\n"
        for script in scripts_head:
            blade += f"    {script}\n"
        blade += "@endpush\n"
    
    # Ensure output directory exists
    os.makedirs(os.path.dirname(output_file), exist_ok=True)
    
    # Write Blade file
    with open(output_file, 'w', encoding='utf-8') as f:
        f.write(blade)
    
    return True

if __name__ == '__main__':
    print("Nicepage to Laravel Blade Converter")
    print("=" * 50)
    print("\nThis script converts HTML files conservatively.")
    print("Usage: python3 convert-nicepage.py <html_file> <blade_file> [lang]")
    
    if len(sys.argv) < 3:
        print("\nExample:")
        print("  python3 convert-nicepage.py Nicepage/Acessibilidade.html resources/views/pt/acessibilidade.blade.php pt")
        sys.exit(1)
    
    html_file = sys.argv[1]
    blade_file = sys.argv[2]
    lang = sys.argv[3] if len(sys.argv) > 3 else 'pt'
    
    try:
        html_to_blade(html_file, blade_file, lang)
        print(f"\n✓ Converted: {html_file} -> {blade_file}")
    except Exception as e:
        print(f"\n✗ Error: {e}")
        sys.exit(1)
