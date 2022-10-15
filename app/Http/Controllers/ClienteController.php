<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

use App\Models\Cliente;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::all();

        return view('clientes.index', ['clientes' => $clientes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();

        return view('clientes.create', [ 'cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente-> name = $request -> input('input_name');
        $cliente-> surname = $request -> input('input_surname');
        $cliente-> email = $request -> input('input_email');
        $cliente-> address = $request -> input('input_address');
        $cliente-> phone = $request -> input('input_phone');
        $cliente-> city_id = $request-> input('input_city_id');
        $cliente-> save();
        return redirect()->action([ClienteController::class, 'index']);
    }
    public function list(){
        return view('clientes.list', ['clientes'=> Cliente::all()]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cliente = cliente::find($id);

        return view('clientes.show', ['cliente' => $cliente, 'cities' => City::All()]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente-> name = $request -> input('input_name');
        $cliente-> surname = $request -> input('input_surname');
        $cliente-> email = $request -> input('input_email');
        $cliente-> city_id = $request-> input('select_city_id');
        $cliente-> save();

        return Redirect()->action([ClienteController::class, 'show'], ['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::destroy($id);
        return back()->with('success', 'Cliente eliminado');

    }
}
