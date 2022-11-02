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
            'imagen'=> [
                'image',
                // 'dimensions:min_width=1024,min_height=1024, max_height=2048, max_width=2048',
                'mimes:jpg,jpeg,png',
                'nullable',
            ],

        ];
    }
}
