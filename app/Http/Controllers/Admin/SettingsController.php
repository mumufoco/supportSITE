<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Mostrar formulário de configurações
     */
    public function edit()
    {
        $settings = Setting::get();
        return view('admin.settings.edit', compact('settings'));
    }

    /**
     * Atualizar configurações
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            // Identidade Visual
            'company_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,ico|max:512',
            
            // Cores
            'primary_color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/',
            'secondary_color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/',
            'text_color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/',
            'background_color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/',
            
            // Contato
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'phone_whatsapp' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'zip_code' => 'nullable|string|max:20',
            
            // Redes Sociais
            'instagram_url' => 'nullable|url|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            
            // Login
            'login_title' => 'required|string|max:255',
            'login_description' => 'nullable|string|max:500',
            'login_background_color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/',
            
            // Outras
            'footer_text' => 'nullable|string|max:1000',
            'show_instagram_feed' => 'boolean',
            'show_testimonials' => 'boolean',
            'items_per_page' => 'required|integer|min:6|max:100',
        ]);

        $settings = Setting::get();

        // Processar upload do logo
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('branding', 'public');
            $validated['logo'] = $logoPath;
        }

        // Processar upload do favicon
        if ($request->hasFile('favicon')) {
            $faviconPath = $request->file('favicon')->store('branding', 'public');
            $validated['favicon'] = $faviconPath;
        }

        $settings->update($validated);

        return redirect()->route('admin.settings.edit')->with('success', 'Configurações atualizadas com sucesso!');
    }
}
