<?php

namespace App\View\Components;

use App\Models\Subcategoria;
use Illuminate\View\Component;

class SubcategoriaForm extends Component
{
    public $categorias, $subcategoria, $titulo;
    public function __construct($titulo, $categorias, $subcategoria)
    {
        if(is_null($subcategoria)){
            $subcategoria = Subcategoria::make([]);
        }
        $this->titulo = $titulo;
        $this->categorias = $categorias;
        $this->subcategoria = $subcategoria;
    }

     public function render()
    {
        $params = [
            'titulo' => $this->titulo,
            'categorias' => $this->categorias,
            'subcategoria' => $this->subcategoria,
        ];
        return view('components.subcategoria-form', $params);
    }
}
