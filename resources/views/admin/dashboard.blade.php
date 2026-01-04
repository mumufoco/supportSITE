@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Principal')

@section('content')
<div class="row">
    <!-- Statistics Cards -->
    <div class="col-md-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total de Serviços</h6>
                        <h3 class="mb-0" style="color: #2d5016;">{{ \App\Models\Service::count() }}</h3>
                    </div>
                    <div style="font-size: 40px; color: #a4d65e; opacity: 0.3;">
                        <i class="fas fa-cogs"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Projetos no Portfólio</h6>
                        <h3 class="mb-0" style="color: #2d5016;">{{ \App\Models\Portfolio::count() }}</h3>
                    </div>
                    <div style="font-size: 40px; color: #a4d65e; opacity: 0.3;">
                        <i class="fas fa-images"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Posts do Instagram</h6>
                        <h3 class="mb-0" style="color: #2d5016;">{{ \App\Models\InstagramPost::count() }}</h3>
                    </div>
                    <div style="font-size: 40px; color: #a4d65e; opacity: 0.3;">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Posts Ativos</h6>
                        <h3 class="mb-0" style="color: #2d5016;">{{ \App\Models\InstagramPost::where('is_active', true)->count() }}</h3>
                    </div>
                    <div style="font-size: 40px; color: #a4d65e; opacity: 0.3;">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Services -->
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-cogs"></i> Serviços Recentes
            </div>
            <div class="card-body">
                @if(\App\Models\Service::count() > 0)
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Status</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Service::latest()->limit(5)->get() as $service)
                                    <tr>
                                        <td>{{ Str::limit($service->title, 30) }}</td>
                                        <td>
                                            @if($service->is_active)
                                                <span class="badge bg-success">Ativo</span>
                                            @else
                                                <span class="badge bg-secondary">Inativo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted text-center py-4">Nenhum serviço cadastrado ainda.</p>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary w-100">
                        <i class="fas fa-plus"></i> Criar Primeiro Serviço
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Portfolios -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-images"></i> Projetos Recentes
            </div>
            <div class="card-body">
                @if(\App\Models\Portfolio::count() > 0)
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Cliente</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Portfolio::latest()->limit(5)->get() as $portfolio)
                                    <tr>
                                        <td>{{ Str::limit($portfolio->title, 25) }}</td>
                                        <td>{{ $portfolio->client_name ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted text-center py-4">Nenhum projeto cadastrado ainda.</p>
                    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary w-100">
                        <i class="fas fa-plus"></i> Criar Primeiro Projeto
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Instagram Integration -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="fab fa-instagram"></i> Integração com Instagram</span>
                <form action="{{ route('admin.instagram.sync') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-secondary">
                        <i class="fas fa-sync"></i> Sincronizar Posts
                    </button>
                </form>
            </div>
            <div class="card-body">
                @if(\App\Models\InstagramPost::count() > 0)
                    <p class="text-muted mb-3">
                        Total de posts sincronizados: <strong>{{ \App\Models\InstagramPost::count() }}</strong>
                    </p>
                    <div class="row">
                        @foreach(\App\Models\InstagramPost::where('is_active', true)->latest()->limit(6)->get() as $post)
                            <div class="col-md-2 mb-3">
                                @if($post->media_url)
                                    <img src="{{ $post->media_url }}" alt="Post" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('admin.instagram.index') }}" class="btn btn-outline-secondary mt-3">
                        Ver Todos os Posts
                    </a>
                @else
                    <p class="text-muted text-center py-4">Nenhum post sincronizado ainda.</p>
                    <p class="text-center">
                        <small>Configure as credenciais do Instagram no arquivo .env e clique em "Sincronizar Posts".</small>
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
