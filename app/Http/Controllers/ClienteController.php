<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ClienteRequest;

use App\Models\Localidad;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
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
        return redirect()->route('clientes.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $cliente = Cliente::destroy($id);
        return redirect()->route('clientes.index');
        // return back()->with('success', 'Cliente eliminado');
        //back() No esta funcionando. Deberia volver hacias atras con status 200 y un mensaje.
        //Investigar    return back()->with('success', 'Cliente eliminado');
        //back() No esta funcionando. Deberia volver hacias atras con status 200 y un mensaje.
        //Investigar
    }
}
