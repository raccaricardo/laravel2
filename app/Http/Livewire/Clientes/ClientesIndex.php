<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\Localidad;


class ClientesIndex extends Component
{

    use WithPagination;
    public $paginacion = 10;
    public $q_nombre = '';
    public $q_apellido = '';
    public $q_email = '';
    public $q_localidad = "";


    protected $paginationTheme = 'bootstrap';


    protected $queryString = [

        'q_nombre'=> ['except' => '', 'as' => 'n'],
        'q_apellido'=> ['except' => '', 'as' => 'ap'],
        'paginacion' => ['except' => 10, 'as' => 'p'],
        'q_email' => ['except' => '', 'as' => 'e'],
        'q_localidad' => ['except' => '', 'as' => 'l'],

    ];


    public function render()
    {
        $cliente = $this->consultar();
        $cliente = $cliente->paginate($this->paginacion);
        if($cliente->currentPage() > $cliente->lastPage()){
            $this->resetPage();
            $cliente = $this->consultar();
            $cliente->paginate($this->paginacion);
        }
        return view('livewire.clientes.clientes-index',['clientes' => $cliente, 'localidades'=> Localidad::all()]);
    }
     private function consultar()
    {
        $query = DB::table('clientes')
            ->join('localidades','clientes.localidad','=','localidades.id')
            ->select('clientes.*','localidades.nombre as localidadNombre');
        
        if($this->q_nombre!= ''){
            $query->where('clientes.nombre', 'LIKE', '%'.$this->q_nombre.'%');
        }
        if($this->q_apellido!= ''){
            $query->where('clientes.apellido', 'LIKE', '%'.$this->q_apellido.'%');
        }
        if($this->q_email != ''){
            $query->where('clientes.email', 'LIKE', '%'.$this->q_email.'%');
        }
        if($this->q_localidad!= ''){
            $query->where('clientes.localidad', '=', $this->q_localidad);
        }

        return $query;
    }
}
