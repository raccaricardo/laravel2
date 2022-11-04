<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductosIndex extends Component
{

    // public $q_categoria;
    // public $q_subcategoria;
    // public $categoria;
    public $categorias;
    public $subcategorias;
    public $producto;
    public $f_categoria;
    public $f_subcategoria;
    public function mount()
    {
        $this->categorias = DB::table('categorias')->get();
        if(is_null($this->producto)){
            $this->producto = Producto::make([]);
        }
    }
    public function render()
    {
        if (!empty($f_categoria)) {
            $this->subcategorias = DB::table('subcategorias')->where('subcategorias.categoria', '=', $this->f_categoria)->get();

        }
        return view('livewire.productos.productos-index');



    }
}
