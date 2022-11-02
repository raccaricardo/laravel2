<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductoForm extends Component
{

    public $categorias;
    public $subcategorias;
    public function __construct($categorias, $subcategorias)
    {
        $this->categorias = $categorias;
        $this->subcategorias = $subcategorias;
    }


    public function render()
    {
        $params = [
            'categorias' => $this->categorias,
            'subcategorias' => $this->subcategorias
        ];

        return view('components.producto-form', $params );
    }
}
