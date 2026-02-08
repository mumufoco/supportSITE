<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    
    protected $fillable = [
        // Identidade Visual
        'logo',
        'favicon',
        'company_name',
        
        // Cores
        'primary_color',
        'secondary_color',
        'text_color',
        'background_color',
        
        // Contato
        'email',
        'phone',
        'phone_whatsapp',
        'address',
        'city',
        'state',
        'zip_code',
        
        // Redes Sociais
        'instagram_url',
        'facebook_url',
        'linkedin_url',
        'youtube_url',
        
        // Login
        'login_title',
        'login_description',
        'login_background_color',
        
        // Outras
        'footer_text',
        'show_instagram_feed',
        'show_testimonials',
        'items_per_page',
    ];

    protected $casts = [
        'show_instagram_feed' => 'boolean',
        'show_testimonials' => 'boolean',
        'items_per_page' => 'integer',
    ];

    /**
     * Obter as configurações (singleton)
     */
    public static function get()
    {
        return self::first() ?? self::create([]);
    }

    /**
     * Atualizar uma configuração específica
     */
    public static function set($key, $value)
    {
        $settings = self::first() ?? self::create([]);
        $settings->update([$key => $value]);
        return $settings;
    }
}
