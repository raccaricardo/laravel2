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
            'condicion_fiscal' => [ ],
            'nombre' => [ 'required', 'unique:proveedores,nombre,'.$this->route('id')],
            'razon_social' => ['required'],
            'cuit' => ['string', 'nullable', 'unique:proveedores,cuit,'.$this->route('id')],
            'direccion' => ['string'],
            'telefono' => ['string', 'max:100', 'nullable'],
            'email' => [ 'string', 'email', 'nullable', 'unique:proveedores,email,'.$this->route('id')],
            'sitio_web' => ['nullable', 'url' ],
        ];
    }
}
