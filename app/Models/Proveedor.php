<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'proveedores';
    protected $fillable = [
        'localidad',
        'condicion_fiscal',
        'nombre',
        'razon_social',
        'cuit',
        'direccion',
        'telefono',
        'email',
        'sitio_web'
    ];

    public function localidades(){
        return $this->belongsTo(Localidad::class, 'localidad');
    }
    public function condicion_fiscal(){
        return $this->belongsTo(Iva::class, 'condicion_fiscal');
    }

}
