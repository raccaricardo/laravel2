<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProveedorForm extends Component
{
    public $titulo;
    public $localidades;
    public $ivas;
    public $proveedor;
    public function __construct($titulo, $proveedor, $localidades = null, $ivas = null)
    {
        $this-> titulo = $titulo;
        $this-> localidades = $localidades;
        $this-> ivas = $ivas;
        $this-> proveedor = $proveedor;
    }

    public function render()
    {
        $params = [
            'ivas' => $this-> ivas,
            'titulo' => $this-> titulo,
            'localidades' => $this-> localidades,
            'proveedor' => $this-> proveedor
        ];
        return view('components.proveedor-form', $params);
    }
}
