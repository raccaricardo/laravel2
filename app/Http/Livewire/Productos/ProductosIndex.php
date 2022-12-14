<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductosIndex extends Component
{ 
    public $categorias, $subcategorias;
    public $q_categoria;
    public $q_subcategoria;
    public function render()
    {
        $categorias = DB::table('categorias')->get();
        $subcategorias = DB::table('categorias')->get();
        return view('livewire.productos.productos-index');
        if(!empty($q_categoria)){
            $subcategorias = DB::table('subcategorias')->where('subcategorias.categoria', '=', $q_categoria);
        }
        return view('livewire.productos.productos-index');



    }
}
