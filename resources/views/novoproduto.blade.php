

@extends('layout.app', ['current' => 'produto'])



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
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">                    
                    <input type="text" class="form-control" name="produto" id="produto" placeholder="Produto">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="estoque" id="estoque" placeholder="Estoque">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="preco" id="preco" placeholder="Valor">
                        </div>
                    </div>
                </div>

                <select class="custom-select custom-select-sm mb-4" name="selectCategoria">
                    <option value="0" selected>Seleciona a Categoria</option>
@foreach ($categorias as $cat)                    
                    <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
@endforeach                     
                </select>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>            
            </form>
        </div>
    </div>
@endsection