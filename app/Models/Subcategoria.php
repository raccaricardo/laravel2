<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoria',
        'nombre',
        'descripcion',
        'image'
    ];
    public function categorias(){
        return $this->belongsTo(Categoria::class, 'categoria');
    }
}
