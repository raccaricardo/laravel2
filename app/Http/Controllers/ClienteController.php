<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreClienteRequest;

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

    public function store(StoreClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated());
        return redirect()->route('clientes.index');
    }
    public function list()
    {
        return view('clientes.list', ['clientes' => Cliente::all()]);
    }

    public function show($id)
    {
        $cliente = cliente::find($id);
        return view('clientes.show', ['cliente' => $cliente, 'localidades' => Localidad::All()]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->name = $request->input('input_name');
        $cliente->surname = $request->input('input_surname');
        $cliente->email = $request->input('input_email');
        $cliente->city_id = $request->input('select_city_id');
        $cliente->save();

        return redirect()->route('clientes.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $cliente = Cliente::destroy($id);
        return back()->with('success', 'Cliente eliminado');
        //back() No esta funcionando. Deberia volver hacias atras con status 200 y un mensaje. 
        //Investigar 
    }
}
