<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clientes';
    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'localidad',
        'telefono',
        'email',
        'email_secundario',
        'dni',
        'razon_social',
        'razon_social_direccion',
        'razon_social_localidad',
        'razon_social_cuit'
    ];


    public function localidades(){
        return $this->belongsTo(Localidad::class, 'localidad');
    }

}
