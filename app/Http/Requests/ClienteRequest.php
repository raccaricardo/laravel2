<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class ClienteRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        return [
            'nombre' => ['required', 'string'],
            'apellido' => ['required', 'string', 'max:150'],
            'direccion' => ['required', 'string'],
            'telefono' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:clientes'],
            'localidad'=> ['required', 'exists:localidades,id'],
            'email_secundario' => ['string', 'nullable'],
            'dni' => ['string', 'nullable'],
            'razon_social' => ['string', 'nullable'],
            'razon_social_direccion' => ['string', 'nullable'],
            'razon_social_localidad' => ['string', 'nullable'],
            'razon_social_cuit' => ['string', 'nullable'] 
        ];
    }
}
