<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = DB::table('clientes')
        ->join('localidades', 'clientes.localidad', '=', 'localidades.id')
        ->get();
        $loca = DB::table('localidades')->get();
        return view('clientes.index', ['clientes'=> $clientes, 'localidades'=>$loca] );
    }

    public function create()
    {
        return view('clientes.create', ['localidades' => DB::table('localidades')->get()]);
    }

    public function store(ClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated());
        return back()->with('cliente_created', 'Cliente '.$cliente->nombre.' guardado');
    }
    public function list()
    {
        return view('clientes.list', ['clientes' => Cliente::all()]);
    }

    public function show($id)
    {
        return view('clientes.show', ['cliente' => Cliente::findOrFail($id), 'localidades' => DB::table('localidades')->get()]);
    }
    
    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->validated());
        return back()-> with('cliente_edited', 'El cliente ha sido editado');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return back()-> with('cliente_deleted', 'El cliente ha sido eliminado');
    }
}
