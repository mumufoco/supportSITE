<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingsHelper
{
    /**
     * Obter uma configuração específica
     */
    public static function get($key = null, $default = null)
    {
        $settings = Setting::first();

        if (!$settings) {
            return $default;
        }

        if ($key === null) {
            return $settings;
        }

        return $settings->{$key} ?? $default;
    }

    /**
     * Obter todas as configurações
     */
    public static function all()
    {
        return Setting::first() ?? Setting::create([]);
    }

    /**
     * Definir uma configuração
     */
    public static function set($key, $value)
    {
        $settings = Setting::first() ?? Setting::create([]);
        $settings->update([$key => $value]);
        return $settings;
    }

    /**
     * Obter a URL do logo
     */
    public static function logo()
    {
        $logo = self::get('logo');
        return $logo ? asset('storage/' . $logo) : null;
    }

    /**
     * Obter a URL do favicon
     */
    public static function favicon()
    {
        $favicon = self::get('favicon');
        return $favicon ? asset('storage/' . $favicon) : null;
    }

    /**
     * Obter cor primária
     */
    public static function primaryColor()
    {
        return self::get('primary_color', '#2d5016');
    }

    /**
     * Obter cor secundária
     */
    public static function secondaryColor()
    {
        return self::get('secondary_color', '#a4d65e');
    }

    /**
     * Obter nome da empresa
     */
    public static function companyName()
    {
        return self::get('company_name', 'Support Solo Sondagens');
    }

    /**
     * Obter e-mail
     */
    public static function email()
    {
        return self::get('email');
    }

    /**
     * Obter telefone
     */
    public static function phone()
    {
        return self::get('phone');
    }

    /**
     * Obter WhatsApp
     */
    public static function whatsapp()
    {
        return self::get('phone_whatsapp');
    }

    /**
     * Obter endereço completo
     */
    public static function address()
    {
        $address = self::get('address');
        $city = self::get('city');
        $state = self::get('state');
        $zip = self::get('zip_code');

        $fullAddress = [];
        if ($address) $fullAddress[] = $address;
        if ($city) $fullAddress[] = $city;
        if ($state) $fullAddress[] = $state;
        if ($zip) $fullAddress[] = $zip;

        return implode(', ', $fullAddress);
    }

    /**
     * Obter URL do Instagram
     */
    public static function instagramUrl()
    {
        return self::get('instagram_url');
    }

    /**
     * Obter URL do Facebook
     */
    public static function facebookUrl()
    {
        return self::get('facebook_url');
    }

    /**
     * Obter URL do LinkedIn
     */
    public static function linkedinUrl()
    {
        return self::get('linkedin_url');
    }

    /**
     * Obter URL do YouTube
     */
    public static function youtubeUrl()
    {
        return self::get('youtube_url');
    }
}
