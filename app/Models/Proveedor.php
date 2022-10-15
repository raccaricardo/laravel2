<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function localidad(){
        return $this->belongsTo(Localidad::class, 'localidad');
    }
    public function condicion_fiscal(){
        return $this->belongsTo(Iva::class, 'condicion_fiscal');
    }

}
