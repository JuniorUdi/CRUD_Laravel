@extends('layout.app', ['current' => 'produto'])

@section('body')
    <div class="card-body">
        <h5 class="card-title">
            Lista de Produtos
        </h5>
@if(count($produtos) > 0)
        <table class="table table-ordered table-hover text-center">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome Produto</th>
                    <th>Estoque</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach ($produtos as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->nome }}</td>
                    <td>{{ $prod->estoque }}</td>
                    <td>{{ 'R$ ' . number_format($prod->preco, 2,',','.') }}</td>
                    @foreach ($categorias as $cat)
                        @if($prod->categoria_id == $cat->id)
                            <td>{{ $cat->nome }}</td>
                        @endif
                    @endforeach
                    <td>
                        <a href="/produtos/editar/{{ $prod->id }}" class="btn btn-sm btn-outline-primary">Editar</a>
                        <a href="/produtos/apagar/{{ $prod->id }}" class="btn btn-sm btn-outline-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                    
            </tbody>
@endif
        </table>
    </div>
@endsection
