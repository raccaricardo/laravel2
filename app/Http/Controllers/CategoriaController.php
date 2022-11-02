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
        return view('categorias.index', ['categorias' => $categorias ]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request)
    {
        $categoria= Categoria::create($request->validated());
        // $categoria = new Categoria();
        // $filePath = $request->file('imagen')->storeAs('imagen', time().'-'.$request->file('imagen')->getClientOriginalName(), 'public');
        // $categoria->imagen = $filePath;
        // $categoria->save();
        return back()->with('cat_created', 'Categoria '.$categoria->nombre.' ha sido creada');
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
        return back()->with('cat_edited', 'Categoria '.$categoria->nombre.' ha sido editada');

    }


    public function destroy($id)
    {
        $categoria = Categoria::destroy($id);
        return back()->with('cat_deleted', 'Categoria ha sido ELIMINADA');

    }
}
