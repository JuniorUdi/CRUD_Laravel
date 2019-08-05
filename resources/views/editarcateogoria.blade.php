@extends('layout.app', ["current" => "categoria"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/categorias/{{ $cat->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="categorias">Nome Categoria</label>
            <input type="text" class="form-control" name="categorias" id="categorias" placeholder="Categoria" value="{{$cat->nome}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-outline-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection