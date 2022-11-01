<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ClienteRequest;

use App\Models\Localidad;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index()
    {
        $loc = DB::table('localidades')->get();
        return view('clientes.index', ['localidades'=> $loc]);
    }

    public function create()
    {
        return view('clientes.create', ['localidades' => Localidad::all()]);
    }

    public function store(ClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated());
        return redirect()->route('clientes.show', ['id' => $cliente->id]);
    }
    public function list()
    {
        return view('clientes.list', ['clientes' => Cliente::all()]);
    }

    public function show($id)
    {
        return view('clientes.show', ['cliente' => Cliente::findOrFail($id), 'localidades' => Localidad::All()]);
    }
    
    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->validated());
        return back()-> with('cliente_editado', 'El cliente ha sido editado');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return back()-> with('cliente_eliminado', 'El cliente ha sido eliminado');
    }
}
