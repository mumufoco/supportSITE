#!/bin/bash

# Batch convert all Nicepage HTML files to Laravel Blade views
# This script processes all HTML files and creates corresponding Blade views

BASE_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
NICEPAGE_DIR="$BASE_DIR/Nicepage"
VIEWS_DIR="$BASE_DIR/resources/views"
CONVERTER="$BASE_DIR/convert-nicepage-blade.py"

# Function to convert filename to route-friendly name
# Example: "Serviços-Geológico.html" -> "servicos-geologico"
to_route_name() {
    local filename="$1"
    # Remove .html extension
    filename="${filename%.html}"
    # Convert to lowercase
    filename="$(echo "$filename" | tr '[:upper:]' '[:lower:]')"
    # Replace special characters
    filename="$(echo "$filename" | iconv -f UTF-8 -t ASCII//TRANSLIT 2>/dev/null || echo "$filename")"
    # Replace spaces and special chars with hyphens
    filename="$(echo "$filename" | sed 's/[^a-z0-9-]/-/g' | sed 's/-\+/-/g' | sed 's/^-//;s/-$//')"
    echo "$filename"
}

# Create view directories
mkdir -p "$VIEWS_DIR/pt"
mkdir -p "$VIEWS_DIR/en"
mkdir -p "$VIEWS_DIR/es"

echo "=============================================
Nicepage to Laravel Blade Batch Converter
=============================================
"

# Counter
total=0
success=0
failed=0

# Convert Portuguese files (root Nicepage directory)
echo "Converting Portuguese files..."
while IFS= read -r -d '' html_file; do
    ((total++))
    filename="$(basename "$html_file")"
    route_name="$(to_route_name "$filename")"
    blade_file="$VIEWS_DIR/pt/${route_name}.blade.php"
    
    if python3 "$CONVERTER" "$html_file" "$blade_file" "pt" 2>/dev/null; then
        ((success++))
        echo "  ✓ $filename -> pt/${route_name}.blade.php"
    else
        ((failed++))
        echo "  ✗ Failed: $filename"
    fi
done < <(find "$NICEPAGE_DIR" -maxdepth 1 -name "*.html" -print0)

# Convert English files
echo ""
echo "Converting English files..."
if [ -d "$NICEPAGE_DIR/en" ]; then
    while IFS= read -r -d '' html_file; do
        ((total++))
        filename="$(basename "$html_file")"
        route_name="$(to_route_name "$filename")"
        blade_file="$VIEWS_DIR/en/${route_name}.blade.php"
        
        if python3 "$CONVERTER" "$html_file" "$blade_file" "en" 2>/dev/null; then
            ((success++))
            echo "  ✓ $filename -> en/${route_name}.blade.php"
        else
            ((failed++))
            echo "  ✗ Failed: $filename"
        fi
    done < <(find "$NICEPAGE_DIR/en" -maxdepth 1 -name "*.html" -print0)
fi

# Convert Spanish files
echo ""
echo "Converting Spanish files..."
if [ -d "$NICEPAGE_DIR/es" ]; then
    while IFS= read -r -d '' html_file; do
        ((total++))
        filename="$(basename "$html_file")"
        route_name="$(to_route_name "$filename")"
        blade_file="$VIEWS_DIR/es/${route_name}.blade.php"
        
        if python3 "$CONVERTER" "$html_file" "$blade_file" "es" 2>/dev/null; then
            ((success++))
            echo "  ✓ $filename -> es/${route_name}.blade.php"
        else
            ((failed++))
            echo "  ✗ Failed: $filename"
        fi
    done < <(find "$NICEPAGE_DIR/es" -maxdepth 1 -name "*.html" -print0)
fi

echo ""
echo "=============================================
Conversion Summary
=============================================
Total files: $total
Successful: $success
Failed: $failed
"

if [ $failed -eq 0 ]; then
    echo "✓ All files converted successfully!"
else
    echo "⚠ Some files failed to convert. Check errors above."
fi
