<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use App\Models\Iva;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;


class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', ['proveedores' => $proveedores]);
    }

    public function create()
    {
        $localidades = Localidad::all();
        $ivas = Iva::all();
        return view('proveedores.create', ['localidades'=>$localidades, 'ivas'=>$ivas]);
    }

    public function store(Request $request)
    {
        $validations = $request -> validate([
            'name' => 'unique | max: 50',
            'razon_social' => 'required | unique | max: 100',
            'direccion' => 'required | max: 100',
            'email' => 'required | max: 100',
            'sitio_web' => 'required | max: 100 | regex: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
        ]);

        $proveedor = new Proveedor();
        $proveedor -> nombre = $request -> input('input_nombre');
        $proveedor -> razon_social = $request -> input('input_razon_social');
        $proveedor -> cuit = $request -> input('input_cuit');
        $proveedor -> direccion = $request -> input('input_direccion');
        $proveedor -> telefono = $request -> input('input_telefono');
        $proveedor -> email = $request -> input('input_email');
        
        $proveedor -> sitio_web = $request -> input('input_sitio_web');
        $proveedor -> save();
        return to_route('proveedores');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $localidades = Localidad::all();
        $iva = Iva::all();
        return view('proveedores.show', ['item'  = Iva::all()];
        return view('proveedores.show', ['item' => Proveedor::find($id), 'localidades'=> $localidades, 'iva'=> $iva, 'editable' => true]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
