<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categoria;

class ControladorProduto extends Controller
{

    public function index()
    {   
        $produtos = Produtos::all();
        $categorias = Categoria::all();
        return view('produto', compact('produtos', 'categorias'));
    }

    
    public function create()
    {        
       $categorias = Categoria::all();
       return view('novoproduto', compact('categorias'));
    }

    
    public function store(Request $request)
    {
        
        $validacao = $request->validate([
            'produto' => 'required|min:3',
            'estoque' => 'required|numeric',
            'preco' => 'required|numeric',
            'selectCategoria' => 'required',
        ]);
            
        
       $produtos = new Produtos();
       $produtos->nome = $request->input('produto');
       $produtos->estoque = $request->input('estoque');
       $produtos->preco = $request->input('preco');
       $produtos->categoria_id = $request->input('selectCategoria');
       $produtos->save();
       return redirect('/produtos');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       
       $produtos = Produtos::find($id);
       $categorias = Categoria::all();
       if(isset($id))
       {
           return view('editarproduto', compact('produtos', 'categorias'));
       }
       return redirect('/produtos');
    }

    
    public function update(Request $request, $id)
    {  
        $validacao = $request->validate([
            'produto' => 'required|min:3',
            'estoque' => 'required|numeric',
            'preco' => 'required|numeric',
            'selectCategoria' => 'required|not_in:0',
        ]);

        $produtos = Produtos::find($id);
        if(isset($produtos))
        {
            $produtos->nome = $request->input('produto');
            $produtos->estoque = $request->input('estoque');
            $produtos->preco = $request->input('preco');
            $produtos->categoria_id = $request->input('selectCategoria');
            $produtos->save();
        }
        return redirect('/produtos');        
    }

    
    public function destroy($id)
    {
        $produtos = Produtos::find($id);
        if(isset($produtos))
        {
            $produtos->delete();
        }
        return redirect('/produtos');
    }
}
