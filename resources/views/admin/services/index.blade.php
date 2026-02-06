@extends('layouts.admin')

@section('title', 'Serviços')
@section('page-title', 'Gerenciar Serviços')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>Lista de Serviços</h4>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Novo Serviço
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if($services->count() > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Criado em</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>#{{ $service->id }}</td>
                                <td>
                                    <strong>{{ $service->title }}</strong>
                                    <br>
                                    <small class="text-muted">{{ Str::limit($service->short_description, 50) }}</small>
                                </td>
                                <td><code>{{ $service->slug }}</code></td>
                                <td>
                                    @if($service->is_active)
                                        <span class="badge bg-success">Ativo</span>
                                    @else
                                        <span class="badge bg-secondary">Inativo</span>
                                    @endif
                                </td>
                                <td>{{ $service->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja deletar este serviço?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Deletar">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $services->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-inbox" style="font-size: 48px; color: #ccc;"></i>
                <p class="text-muted mt-3">Nenhum serviço cadastrado ainda.</p>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-plus"></i> Criar Primeiro Serviço
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
