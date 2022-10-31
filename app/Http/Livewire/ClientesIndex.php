<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
//use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;


class ClientesIndex extends Component
{

    use WithPagination;
    public $busqueda = '';
    public $paginacion = 10;
    protected $paginationTheme = 'bootstrap';
    public $localidades;

    protected $queryString = [

        'busqueda' => ['except' => '', 'as' => 'b'],
        'paginacion' => ['except' => 10, 'as' => 'p'],

    ];


    public function render()
    {
        $clientes = $this->consultar();
        $clientes = $clientes->paginate($this->paginacion);
        if($clientes->currentPage() > $clientes->lastPage()){
            $this->resetPage();
            $clientes = $this->consultar();
            $clientes->paginate($this->paginacion);
        }
        return view('livewire.clientes-index',['clientes' => $clientes]);
    }

    private function consultar()
    {
        $query = DB::table('clientes')
        // ->join('localidades', 'clientes.localidad', '=', 'localidades.id')
        ->select(['id', 'localidad', 'nombre', 'apellido', 'email', 'dni'])
        ->orderBy('apellido')
        ->get();

        if($this->busqueda != ''){
            $query->where('email', 'LIKE', '%'.$this->busqueda.'%');
        }

        
        return $query;
    }
}
