<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategoria',
        'categoria',
        'proveedor',
        'fabricante',
        'nombre',
        'nombre_alternativo',
        'descripcion',
        'costo',
        'iva',
        'stock',
        'stock_minimo',
        'stock_maximo',
        'garantia',
        'codigo_upc',
        'imagen',
        'oferta'
    ];
}
