<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Error;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::All();
        if(!$categorias){
            return redirect()->route('categorias.index');
        }
        return view('categorias.index', ['categorias' => $categorias ]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request)
    {
        $categoria = Categoria::create($request->validated());
        return redirect()->route('categorias.index');
    }
 
    public function show($id)
    {
        return view('categorias.show', ['categoria'=> Categoria::findOrFail($id)]);

    } 
 
    public function update(CategoriaRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->validated());
        return redirect()->route('categorias.show', ['id' => $id]);
    }

  
    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect()->route('categorias.index');
    }
}
