<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        return [
            'nombre'=> ['string', 'required', 'unique:categorias,nombre,'.$this->route('id')],
            'descripcion'=> ['string', 'nullable'],
            'imagen'=> ['string', 'nullable']
        ];
    }
}
