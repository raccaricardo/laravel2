<?php

namespace App\Http\Controllers;

use App\Models\Iva;
use Illuminate\Http\Request;

class IvaController extends Controller
{

    public function index()
    {
        $message= null ;
        return view('iva.index', ['ivas' => Iva::all()]);
    }

    public function create()
    {
        return view('iva.create');
    }

    public function store(Request $request)
    {
        $iva = new Iva();
        $iva->name = $request->input('input_name');
        $iva->save();
        return to_route('iva/show', ['id' => $iva->id]);
    }

    public function show($id)
    {
        return view('iva.show', ['iva' => Iva::find($id)]);
    }

    public function edit($id)
    {
        return view('iva.show', ['iva' => Iva::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $iva = Iva::find($id);
        $iva->name = $request->input('input_name');
        $iva->save();
        return view('iva.show', ['iva'=> $iva]);
    }

    public function destroy($id)
    {
        $iva = Iva::destroy($id);
        return back()->with('success', 'Cliente eliminado');
    }
}
