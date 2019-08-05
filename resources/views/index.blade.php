
@extends('layout.app', ['current' => 'home'])

@section('body')
    <div class="jumbotron bg-light border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-header">
                            Cadastro de Produtos
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <p class="card-text">
                                Aqui você verifica todos os seus produtos.
                                Para cadastrar um novo produto clique no botão abaixo.
                                Só não se esqueça de cadastrar previamente as categorias.
                            </p>
                        </div>
                    </div>                      
                    <div class="card-footer text-muted">
                        <a href="/produtos" class="btn btn-outline-primary">Lista de produtos</a>
                        <a href="/produtos/novo" class="btn btn-outline-primary">Novo produto</a>
                    </div>                        
                </div>
                <div class="card border border-primary">
                    <div class="card-header">
                            Cadastro de Categorias
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <p class="card-text">
                                Aqui você verifica todas suas categorias.
                                Para cadastrar uma nova categoria clique no botão abaixo.
                            </p>
                        </div>                            
                    </div>
                    <div class="card-footer text-muted">
                        <a href="/categorias" class="btn btn-outline-primary">Lista de categorias</a>    
                        <a href="/categorias/novo" class="btn btn-outline-primary">Nova categoria</a>   
                    </div>
              </div>                
            </div>
        </div>
    </div>
@endsection