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
            'image' => ['nullable', 'string']
        ];
    }
}
