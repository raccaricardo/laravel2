<?php

namespace App\Http\Controllers;

use Illuminate\Support\MessageBag;
use Symfony\Component\VarDumper\Caster\RedisCaster;
use Illuminate\Http\Request;

use App\Http\Requests\ProveedorRequest;
use App\Models\Localidad;
use App\Models\Iva;
use App\Models\Proveedor;

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
        $iva = Iva::all();        
        return view('proveedores.create', ['localidades'=>$localidades, 'ivas'=>$iva, 'proveedor'=>Proveedor::make()]);
    }

    public function store(ProveedorRequest $request)
    {
        $proveedor = Proveedor::create($request->validated());
        return redirect()->route('proveedores.show', ['id'=> $proveedor->id]);
    }

    public function show($id)
    {
        $condicion_fiscal = Iva::all();
        $localidades = Localidad::all();
        $proveedor = Proveedor::findOrFail($id);
        if(!$id){
            $proveedor = Proveedor::make([]);
        }
        return view('proveedores.show', ['proveedor'=>$proveedor, 'ivas'=> $condicion_fiscal, 'localidades' => $localidades ]);
    }

    public function update(ProveedorRequest $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor-> update($request->validated());
        return redirect()->route('proveedores.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        Proveedor::destroy($id);
        return redirect()->route('proveedores.index');
    }
}
