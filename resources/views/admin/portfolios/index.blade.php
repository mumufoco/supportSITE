@extends('layouts.admin')

@section('title', 'Portfólio')
@section('page-title', 'Gerenciar Portfólio')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>Lista de Projetos</h4>
    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Novo Projeto
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if($portfolios->count() > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Cliente</th>
                            <th>Status</th>
                            <th>Criado em</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td>#{{ $portfolio->id }}</td>
                                <td>
                                    <strong>{{ $portfolio->title }}</strong>
                                    @if($portfolio->image)
                                        <br>
                                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Imagem" style="max-width: 50px; max-height: 50px; border-radius: 4px; margin-top: 5px;">
                                    @endif
                                </td>
                                <td>{{ $portfolio->client_name ?? 'N/A' }}</td>
                                <td>
                                    @if($portfolio->is_active)
                                        <span class="badge bg-success">Ativo</span>
                                    @else
                                        <span class="badge bg-secondary">Inativo</span>
                                    @endif
                                </td>
                                <td>{{ $portfolio->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja deletar este projeto?');">
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
                {{ $portfolios->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-inbox" style="font-size: 48px; color: #ccc;"></i>
                <p class="text-muted mt-3">Nenhum projeto cadastrado ainda.</p>
                <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-plus"></i> Criar Primeiro Projeto
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
