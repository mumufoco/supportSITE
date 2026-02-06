@extends('layouts.admin')

@section('title', isset($service) ? 'Editar Serviço' : 'Novo Serviço')
@section('page-title', isset($service) ? 'Editar Serviço: ' . $service->title : 'Novo Serviço')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-cogs"></i> {{ isset($service) ? 'Editar' : 'Criar' }} Serviço
            </div>
            <div class="card-body">
                <form action="{{ isset($service) ? route('admin.services.update', $service) : route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($service))
                        @method('PUT')
                    @endif

                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title ?? '') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Short Description -->
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Descrição Curta <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="2" required>{{ old('short_description', $service->short_description ?? '') }}</textarea>
                        <small class="text-muted">Máximo 500 caracteres</small>
                        @error('short_description')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição Completa <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" required>{{ old('description', $service->description ?? '') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagem</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                        @if(isset($service) && $service->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $service->image) }}" alt="Imagem atual" style="max-width: 200px; max-height: 150px;">
                            </div>
                        @endif
                        @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Icon -->
                    <div class="mb-3">
                        <label for="icon" class="form-label">Ícone (Font Awesome)</label>
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Ex: fas fa-cogs" value="{{ old('icon', $service->icon ?? '') }}">
                        <small class="text-muted">Utilize classes do Font Awesome</small>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $service->is_active ?? true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Ativo
                            </label>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> {{ isset($service) ? 'Atualizar' : 'Criar' }} Serviço
                        </button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-times"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SEO Panel -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-search"></i> SEO
            </div>
            <div class="card-body">
                <!-- Meta Title -->
                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Título</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title', $service->meta_title ?? '') }}" maxlength="255">
                    <small class="text-muted">Recomendado: 50-60 caracteres</small>
                </div>

                <!-- Meta Description -->
                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Descrição</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3" maxlength="500">{{ old('meta_description', $service->meta_description ?? '') }}</textarea>
                    <small class="text-muted">Recomendado: 150-160 caracteres</small>
                </div>

                <!-- Meta Keywords -->
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Palavras-chave</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $service->meta_keywords ?? '') }}">
                    <small class="text-muted">Separe por vírgula</small>
                </div>

                <!-- OG Image -->
                <div class="mb-3">
                    <label for="og_image" class="form-label">Imagem para Redes Sociais</label>
                    <input type="text" class="form-control" id="og_image" name="og_image" value="{{ old('og_image', $service->og_image ?? '') }}">
                    <small class="text-muted">URL da imagem para compartilhamento</small>
                </div>

                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i>
                    <small>Preencha os campos de SEO para melhorar a visibilidade nos mecanismos de busca.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
