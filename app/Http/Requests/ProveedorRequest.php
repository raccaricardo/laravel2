<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'localidad'=> ['required', 'exists:localidades,id'],
            // 'condicion_fiscal' => [ ],
            'nombre' => [ 'string', 'required', 'unique:proveedores,nombre'],
            'razon_social' => ['required'],
            'cuit' => ['string' ,'nullable', 'unique:proveedores,cuit'],
            'direccion' => ['string' ,'nullable'],
            'telefono' => ['string', 'nullable', 'max:100'],
            'email' => [ 'string', 'nullable', 'email'],
            'sitio_web' => [ 'url', 'nullable' ],
        ];
    }
}
