<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::firstOrCreate(
            ['id' => 1],
            [
                'company_name' => 'Support Solo Sondagens',
                'primary_color' => '#2d5016',
                'secondary_color' => '#a4d65e',
                'text_color' => '#333333',
                'background_color' => '#ffffff',
                'email' => 'contato@supportsondagens.com.br',
                'phone' => '(XX) XXXX-XXXX',
                'phone_whatsapp' => '(XX) XXXXX-XXXX',
                'address' => 'Endereço da empresa',
                'city' => 'Cidade',
                'state' => 'CE',
                'zip_code' => '00000-000',
                'instagram_url' => 'https://instagram.com/support_solo_sondagens',
                'facebook_url' => null,
                'linkedin_url' => null,
                'youtube_url' => null,
                'login_title' => 'Support Solo Sondagens',
                'login_description' => 'Sistema de Administração',
                'login_background_color' => '#2d5016',
                'footer_text' => 'Support Solo Sondagens © 2026. Todos os direitos reservados.',
                'show_instagram_feed' => true,
                'show_testimonials' => true,
                'items_per_page' => 12,
            ]
        );
    }
}
