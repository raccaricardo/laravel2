<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function index()
    {
        return view('productos.index', ['productos'=> DB::table('productos'), 'categorias'=> DB::table('categorias'), 'subcategorias'=> DB::table('subcategorias')]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return "store";
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(Producto $producto)
    {
        //
    }

    public function update(Request $request, Producto $producto)
    {
        //
    }

    public function destroy(Producto $producto)
    {
        //
    }
}
