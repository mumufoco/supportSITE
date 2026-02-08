@extends('layouts.admin')

@section('title', 'Instagram')
@section('page-title', 'Gerenciar Posts do Instagram')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>Posts do Instagram</h4>
    <form action="{{ route('admin.instagram.sync') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-secondary">
            <i class="fas fa-sync"></i> Sincronizar Posts
        </button>
    </form>
</div>

<div class="card mb-4">
    <div class="card-body">
        <p class="text-muted mb-0">
            <strong>Total de posts:</strong> {{ \App\Models\InstagramPost::count() }} | 
            <strong>Posts ativos:</strong> {{ \App\Models\InstagramPost::where('is_active', true)->count() }}
        </p>
    </div>
</div>

@if($posts->count() > 0)
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($post->media_url)
                        <img src="{{ $post->media_url }}" class="card-img-top" alt="Post" style="height: 250px; object-fit: cover;">
                    @endif
                    
                    <div class="card-body">
                        <p class="card-text text-muted small">
                            {{ Str::limit($post->caption, 100) }}
                        </p>
                        
                        <div class="d-flex gap-2 mb-3">
                            <span class="badge bg-light text-dark">
                                <i class="fas fa-heart"></i> {{ $post->likes_count }}
                            </span>
                            <span class="badge bg-light text-dark">
                                <i class="fas fa-comment"></i> {{ $post->comments_count }}
                            </span>
                        </div>

                        <small class="text-muted d-block mb-3">
                            {{ $post->timestamp ? $post->timestamp->format('d/m/Y H:i') : 'Data não disponível' }}
                        </small>

                        <div class="d-flex gap-2">
                            @if($post->is_active)
                                <span class="badge bg-success">Ativo</span>
                            @else
                                <span class="badge bg-secondary">Inativo</span>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <form action="{{ route('admin.instagram.toggle', $post) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm btn-outline-warning">
                                <i class="fas fa-eye{{ $post->is_active ? '-slash' : '' }}"></i>
                                {{ $post->is_active ? 'Ocultar' : 'Mostrar' }}
                            </button>
                        </form>

                        <form action="{{ route('admin.instagram.destroy', $post) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja deletar este post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Deletar
                            </button>
                        </form>

                        @if($post->permalink)
                            <a href="{{ $post->permalink }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-external-link-alt"></i> Ver
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links() }}
    </div>
@else
    <div class="card">
        <div class="card-body text-center py-5">
            <i class="fab fa-instagram" style="font-size: 48px; color: #ccc;"></i>
            <p class="text-muted mt-3">Nenhum post sincronizado ainda.</p>
            <p class="text-muted small">
                Configure as credenciais do Instagram no arquivo .env e clique em "Sincronizar Posts".
            </p>
            <form action="{{ route('admin.instagram.sync') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-primary mt-3">
                    <i class="fas fa-sync"></i> Sincronizar Posts
                </button>
            </form>
        </div>
    </div>
@endif
@endsection
