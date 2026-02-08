@extends('layouts.admin')

@section('title', 'Configurações')
@section('page-title', 'Configurações Gerais do Site')

@section('content')
<div class="row">
    <!-- Identidade Visual -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-image"></i> Identidade Visual
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Company Name -->
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Nome da Empresa <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name', $settings->company_name) }}" required>
                        @error('company_name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Logo -->
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" accept="image/*">
                        @if($settings->logo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" style="max-width: 150px; max-height: 100px;">
                            </div>
                        @endif
                        <small class="text-muted d-block mt-2">Formatos aceitos: JPEG, PNG, JPG, GIF, SVG (máx. 2MB)</small>
                        @error('logo')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Favicon -->
                    <div class="mb-3">
                        <label for="favicon" class="form-label">Favicon (Ícone do Site)</label>
                        <input type="file" class="form-control @error('favicon') is-invalid @enderror" id="favicon" name="favicon" accept="image/*">
                        @if($settings->favicon)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $settings->favicon) }}" alt="Favicon" style="max-width: 50px; max-height: 50px;">
                            </div>
                        @endif
                        <small class="text-muted d-block mt-2">Formatos aceitos: JPEG, PNG, JPG, GIF, ICO (máx. 512KB)</small>
                        @error('favicon')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <hr>

                    <!-- Cores do Site -->
                    <h5 class="mb-3"><i class="fas fa-palette"></i> Cores do Site</h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="primary_color" class="form-label">Cor Primária (Verde Escuro) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="color" class="form-control form-control-color @error('primary_color') is-invalid @enderror" id="primary_color" name="primary_color" value="{{ old('primary_color', $settings->primary_color) }}" required>
                                <input type="text" class="form-control @error('primary_color') is-invalid @enderror" name="primary_color_text" value="{{ old('primary_color', $settings->primary_color) }}" readonly>
                            </div>
                            @error('primary_color')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="secondary_color" class="form-label">Cor Secundária (Verde Claro) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="color" class="form-control form-control-color @error('secondary_color') is-invalid @enderror" id="secondary_color" name="secondary_color" value="{{ old('secondary_color', $settings->secondary_color) }}" required>
                                <input type="text" class="form-control @error('secondary_color') is-invalid @enderror" name="secondary_color_text" value="{{ old('secondary_color', $settings->secondary_color) }}" readonly>
                            </div>
                            @error('secondary_color')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="text_color" class="form-label">Cor do Texto <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="color" class="form-control form-control-color @error('text_color') is-invalid @enderror" id="text_color" name="text_color" value="{{ old('text_color', $settings->text_color) }}" required>
                                <input type="text" class="form-control @error('text_color') is-invalid @enderror" name="text_color_text" value="{{ old('text_color', $settings->text_color) }}" readonly>
                            </div>
                            @error('text_color')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="background_color" class="form-label">Cor de Fundo <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="color" class="form-control form-control-color @error('background_color') is-invalid @enderror" id="background_color" name="background_color" value="{{ old('background_color', $settings->background_color) }}" required>
                                <input type="text" class="form-control @error('background_color') is-invalid @enderror" name="background_color_text" value="{{ old('background_color', $settings->background_color) }}" readonly>
                            </div>
                            @error('background_color')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">
                        <i class="fas fa-save"></i> Salvar Configurações
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Informações de Contato -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-phone"></i> Informações de Contato
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $settings->email) }}">
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $settings->phone) }}" placeholder="(XX) XXXX-XXXX">
                        @error('phone')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone_whatsapp" class="form-label">WhatsApp</label>
                        <input type="tel" class="form-control @error('phone_whatsapp') is-invalid @enderror" id="phone_whatsapp" name="phone_whatsapp" value="{{ old('phone_whatsapp', $settings->phone_whatsapp) }}" placeholder="(XX) XXXXX-XXXX">
                        @error('phone_whatsapp')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Endereço</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $settings->address) }}">
                        @error('address')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city', $settings->city) }}">
                            @error('city')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="state" class="form-label">Estado</label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state', $settings->state) }}" maxlength="2">
                            @error('state')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip_code" class="form-label">CEP</label>
                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="zip_code" name="zip_code" value="{{ old('zip_code', $settings->zip_code) }}">
                            @error('zip_code')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">
                        <i class="fas fa-save"></i> Salvar Contato
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Redes Sociais -->
<div class="row mb-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <i class="fab fa-instagram"></i> Redes Sociais
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="instagram_url" class="form-label">Instagram</label>
                        <input type="url" class="form-control @error('instagram_url') is-invalid @enderror" id="instagram_url" name="instagram_url" value="{{ old('instagram_url', $settings->instagram_url) }}" placeholder="https://instagram.com/...">
                        @error('instagram_url')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="facebook_url" class="form-label">Facebook</label>
                        <input type="url" class="form-control @error('facebook_url') is-invalid @enderror" id="facebook_url" name="facebook_url" value="{{ old('facebook_url', $settings->facebook_url) }}" placeholder="https://facebook.com/...">
                        @error('facebook_url')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="linkedin_url" class="form-label">LinkedIn</label>
                        <input type="url" class="form-control @error('linkedin_url') is-invalid @enderror" id="linkedin_url" name="linkedin_url" value="{{ old('linkedin_url', $settings->linkedin_url) }}" placeholder="https://linkedin.com/...">
                        @error('linkedin_url')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="youtube_url" class="form-label">YouTube</label>
                        <input type="url" class="form-control @error('youtube_url') is-invalid @enderror" id="youtube_url" name="youtube_url" value="{{ old('youtube_url', $settings->youtube_url) }}" placeholder="https://youtube.com/...">
                        @error('youtube_url')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Salvar Redes Sociais
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Configurações de Login -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-sign-in-alt"></i> Configurações de Login
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="login_title" class="form-label">Título da Página de Login <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('login_title') is-invalid @enderror" id="login_title" name="login_title" value="{{ old('login_title', $settings->login_title) }}" required>
                        @error('login_title')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="login_description" class="form-label">Descrição da Página de Login</label>
                        <textarea class="form-control @error('login_description') is-invalid @enderror" id="login_description" name="login_description" rows="3">{{ old('login_description', $settings->login_description) }}</textarea>
                        @error('login_description')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="login_background_color" class="form-label">Cor de Fundo do Login <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="color" class="form-control form-control-color @error('login_background_color') is-invalid @enderror" id="login_background_color" name="login_background_color" value="{{ old('login_background_color', $settings->login_background_color) }}" required>
                            <input type="text" class="form-control @error('login_background_color') is-invalid @enderror" name="login_background_color_text" value="{{ old('login_background_color', $settings->login_background_color) }}" readonly>
                        </div>
                        @error('login_background_color')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Salvar Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Outras Configurações -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-cog"></i> Outras Configurações
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="items_per_page" class="form-label">Itens por Página <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('items_per_page') is-invalid @enderror" id="items_per_page" name="items_per_page" value="{{ old('items_per_page', $settings->items_per_page) }}" min="6" max="100" required>
                            <small class="text-muted">Número de itens exibidos por página em listas (6-100)</small>
                            @error('items_per_page')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="footer_text" class="form-label">Texto do Rodapé</label>
                        <textarea class="form-control @error('footer_text') is-invalid @enderror" id="footer_text" name="footer_text" rows="3">{{ old('footer_text', $settings->footer_text) }}</textarea>
                        @error('footer_text')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="show_instagram_feed" name="show_instagram_feed" value="1" {{ old('show_instagram_feed', $settings->show_instagram_feed) ? 'checked' : '' }}>
                            <label class="form-check-label" for="show_instagram_feed">
                                Mostrar Feed do Instagram no Site
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="show_testimonials" name="show_testimonials" value="1" {{ old('show_testimonials', $settings->show_testimonials) ? 'checked' : '' }}>
                            <label class="form-check-label" for="show_testimonials">
                                Mostrar Depoimentos no Site
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Salvar Configurações
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Sincronizar cores com campos de texto
    document.getElementById('primary_color').addEventListener('change', function() {
        document.querySelector('input[name="primary_color_text"]').value = this.value;
    });
    document.getElementById('secondary_color').addEventListener('change', function() {
        document.querySelector('input[name="secondary_color_text"]').value = this.value;
    });
    document.getElementById('text_color').addEventListener('change', function() {
        document.querySelector('input[name="text_color_text"]').value = this.value;
    });
    document.getElementById('background_color').addEventListener('change', function() {
        document.querySelector('input[name="background_color_text"]').value = this.value;
    });
    document.getElementById('login_background_color').addEventListener('change', function() {
        document.querySelector('input[name="login_background_color_text"]').value = this.value;
    });
</script>
@endsection
