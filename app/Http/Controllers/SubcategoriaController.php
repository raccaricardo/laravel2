<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubcategoriaRequest;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Nette\Utils\Image;

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
        $request->validated();
        $subcategoria = new Subcategoria();
        $subcategoria->categoria =  $request->input('categoria');
        $subcategoria->nombre =  $request->input('nombre');
        $subcategoria->descripcion =  $request->input('descripcion');
        
        if($request->hasFile('imagen')){

            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $fileName= time().'.'.$extension;        
            $file->move('uploads/subcategorias'.'/'. $fileName);
            $resizedImage = Image::make(public_path('uploads/subcategorias'.'/'.$fileName))->save();
            $subcategoria->imagen = public_path('uploads/subcategorias'.'/'. $fileName);
        }            
        $subcategoria->save();

        return back()->with('subcat_created', 'Subcategoria '.$subcategoria->nombre.'creada');
    }

    public function show($id)
    {
        return view('subcategorias.show', ['categorias'=> Categoria::all(), 'subcategoria' => Subcategoria::findOrFail($id) ]);
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
