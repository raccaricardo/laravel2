<?php

namespace App\Http\Livewire\Productos;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductosIndex extends Component
{

    public $q_categoria;
    public $q_subcategoria;
    public function render()
    {
        $categorias = DB::table('categorias')->get();
        $subcategorias = DB::table('categorias')->get();
        return view('livewire.productos.productos-index', [
            'categorias', $categorias,
            'subcategorias', $subcategorias
        ]);
        if(!empty($q_categoria)){
            $subcategorias = DB::table('subcategorias')->where('subcategorias.categoria', '=', $q_categoria);
        }

    }
 }
