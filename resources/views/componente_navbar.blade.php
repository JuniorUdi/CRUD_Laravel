<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-5">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> 

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current == "home") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home</a>
            </li>
            <li @if($current == "produto") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
            <li @if($current == "categoria") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/categorias">Categorias</a>
            </li>
        </ul>
              
        <a href="/categorias/novo" id="link_cadastro" class="btn btn-outline-info my-2 my-sm-0"  type="submit" @if($current == "categoria") style='display:block' @else style='display:none' @endif>Nova Categoria</a>
        <a href="/produtos/novo" id="link_cadastro" class="btn btn-outline-info my-2 my-sm-0"  type="submit" @if($current == "produto") style='display:block' @else style='display:none' @endif>Novo Produto</a>
        
    </div>
</nav>