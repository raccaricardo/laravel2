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
            'localidad' => ['required' ],
            'condicion_fiscal' => [ ],
            'nombre' => [ 'required' | 'unique'],
            'razon_social' => ['required'],
            'cuit' => ['string' | 'nullable' | 'unique'],
            'direccion' => ['string'],
            'telefono' => ['string' | 'max:100' | 'nullable'],
            'email' => [ 'string' | 'email' | 'nullable'],
            'sitio_web' => ['nullable' | 'url' ],
        ];
    }
}
