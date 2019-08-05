@extends('layout.app', ["current" => "categoria"])

@section('body')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card border">
    <div class="card-body">
        <form action="/categorias" method="POST">
            @csrf
            <div class="form-group">
                <label for="categorias">Nome Categoria</label>
                <input type="text" class="form-control" name="categorias" id="categorias" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>            
        </form>
    </div>
</div>
@endsection

