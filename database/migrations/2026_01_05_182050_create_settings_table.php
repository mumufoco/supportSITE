<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            
            // Identidade Visual
            $table->string('logo')->nullable()->comment('Caminho do logo');
            $table->string('favicon')->nullable()->comment('Caminho do favicon');
            $table->string('company_name')->default('Support Solo Sondagens');
            
            // Cores do Site
            $table->string('primary_color')->default('#2d5016')->comment('Cor primária (verde escuro)');
            $table->string('secondary_color')->default('#a4d65e')->comment('Cor secundária (verde claro)');
            $table->string('text_color')->default('#333333')->comment('Cor do texto');
            $table->string('background_color')->default('#ffffff')->comment('Cor de fundo');
            
            // Informações de Contato
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_whatsapp')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            
            // Redes Sociais
            $table->string('instagram_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('youtube_url')->nullable();
            
            // Configurações de Login
            $table->string('login_title')->default('Support Solo Sondagens')->comment('Título da página de login');
            $table->text('login_description')->nullable()->comment('Descrição na página de login');
            $table->string('login_background_color')->default('#2d5016')->comment('Cor de fundo do login');
            
            // Outras Configurações
            $table->text('footer_text')->nullable()->comment('Texto do rodapé');
            $table->boolean('show_instagram_feed')->default(true);
            $table->boolean('show_testimonials')->default(true);
            $table->integer('items_per_page')->default(12);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
