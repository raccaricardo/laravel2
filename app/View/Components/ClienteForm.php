<?php

namespace App\View\Components;

use App\Models\Cliente;
use Illuminate\View\Component;

class ClienteForm extends Component
{
    public $localidades;
    public $cliente;
    public $titulo;

    public function __construct($titulo, $localidades = null, $cliente = null )
    {
        if(is_null($cliente)){
            $cliente = Cliente::make([]);
         }
 
         $this->localidades=$localidades;
         $this->cliente=$cliente;
         $this->titulo = $titulo;
    }

    public function render()
    {
        $params =[
            'cliente' => $this->cliente,
            'localidades' => $this->localidades,
            'titulo' => $this->titulo
        ];
        return view('components.cliente-form', $params);
    }
}
