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
    protected $fillable = ['localidad', 'nombre', 'apellido', 'direccion', 'telefono', 'email'];


    public function localidades(){
        return $this->belongsTo(Localidad::class, 'localidad');
    }

}
