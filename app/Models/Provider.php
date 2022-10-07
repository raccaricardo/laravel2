<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function cities(){
        return $this->belongsTo(City::class, 'city_id');
    }
    public function fiscalCondition(){
        return $this->belongsTo(Iva::class, 'fiscal_condition_id');
    }

}
