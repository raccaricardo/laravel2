<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubcategoriaRequest;
use App\Models\Categoria;
use App\Models\Subcategoria;

class SubcategoriaController extends Controller
{
     public function index()
    {
        return view('subcategorias.index', [ 'categorias'=> Categoria::all(), 'subcategorias'=> Subcategoria::all()]);
    }

    public function create()
    {
        return view('subcategorias.create', [ 'subcategorias'=> Subcategoria::all()]);
    }

    public function store(SubcategoriaRequest $request)
    {
        $subcategoria = Subcategoria::create($request->validated());
        return back()->with('subcat_created', 'Subcategoria '.$subcategoria->nombre.'creada');
    }

    public function show($id)
    {
        return view('subcategorias.show', ['subcategoria' => Subcategoria::findOrFail($id)]);
    }

    public function update(SubcategoriaRequest $request, $id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria -> update($request->validated());
        return back()->with('subcat_edited', 'Subcategoria ha sido editada');
    }

    public function destroy($id)
    {
        Subcategoria::destroy($id);
        return back()->with('subcat_deleted', 'La subcategoria ha sido eliminada');
    }
}
