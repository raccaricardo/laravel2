<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
//use App\Models\Cliente;
use App\Models\Localidad;
use Livewire\Component;
use Livewire\WithPagination;


class ClientesIndex extends Component
{

    use WithPagination;
    public $paginacion = 10;

    public $q_apellido = '';
    public $q_email = '';
    public $q_localidad = "";


    protected $paginationTheme = 'bootstrap';


    protected $queryString = [

        'q_email' => ['except' => '', 'as' => 'e'],
        'q_localidad' => ['except' => '', 'as' => 'l'],
        'q_apellido'=> ['except' => '', 'as' => 'ap'],
        'paginacion' => ['except' => 10, 'as' => 'p'],

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
        return view('livewire.clientes-index',['clientes' => $cliente, 'localidades'=> Localidad::all()]);
    }

    private function consultar()
    {
        $query = DB::table('clientes')
            ->join('localidades','clientes.localidad','=','localidades.id')
            ->select('clientes.*','localidades.nombre as localidadNombre');
        if($this->q_email != ''){
            $query->where('clientes.email', 'LIKE', '%'.$this->q_email.'%');
        }
        if($this->q_localidad!= ''){
            $query->where('clientes.localidad', '=', $this->q_localidad);
        }
        if($this->q_apellido!= ''){
            $query->where('clientes.apellido', 'LIKE', '%'.$this->q_apellido.'%');
        }

        return $query;
    }
}
