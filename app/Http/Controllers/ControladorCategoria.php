<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ControladorCategoria extends Controller
{
    
    public function index()
    {   
        $cats = Categoria::all();
        return view('categoria', compact('cats'));
    }


    public function create()
    {
        # simplesmente mostra um formulário para novo cadastro
        return view('novacategoria');
    }

    public function store(Request $request)
    {

        $validacao = $request->validate([
            'nome' => 'required|min:3',            
        ]);

        $cat = new Categoria();
        $cat->nome = $request->input('categorias');
        $cat->save();
        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $cat = Categoria::find($id);
        if(isset($cat))
        {
            return view('editarcateogoria', compact('cat'));
        }
        return redirect('/categorias');
    }

    
    public function update(Request $request, $id)
    {
        $cat = Categoria::find($id);
        if(isset($cat))
        {
            $cat->nome = $request->input('categorias');
            $cat->save();
        }
        return redirect('/categorias');
    }

    
    public function destroy($id)
    {
        $cat = Categoria::find($id);
        if(isset($cat))
        {
            $cat->delete();
        }
        return redirect('/categorias');
    }
}
