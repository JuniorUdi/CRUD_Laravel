@extends('layout.app', ['current' => 'categoria'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">
                Lista de Categorias
            </h5>
@if(count($cats) > 0)            
            <table class="table table-ordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
@foreach ($cats as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->nome }}</td>
                        <td>
                            <a href="/categorias/editar/{{ $cat->id }}" class="btn btn-sm btn-outline-primary">Editar</a>
                            <a href="/categorias/apagar/{{ $cat->id }}" class="btn btn-sm btn-outline-danger">Apagar</a>
                        </td>
                    </tr>
@endforeach                    
                </tbody>
            </table>
@endif
        </div>
    </div>
@endsection