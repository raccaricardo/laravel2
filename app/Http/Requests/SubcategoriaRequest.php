<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoriaRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        return [
            'categoria' => ['required', 'exists:categorias,id'],
            'nombre' => ['required', 'string', 'max:100'],
            'descripcion' => ['nullable', 'string'],
            'imagen'=> [
                // 'image',
                // 'dimensions:min_width=1024,min_height=1024, max_height=2048, max_width=2048',
                // 'mimes:jpg,jpeg,png',
                'nullable',
            ],
        ];
    }
}
