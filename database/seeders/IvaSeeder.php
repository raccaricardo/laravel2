<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IvaSeeder extends Seeder
{

    public function run()
    {
        DB::table('iva')->insert([
            [ 'nombre' => 'excento' ],
            [ 'nombre' => 'monotributista'],
            [ 'nombre' => 'consumidor final']
        ]);

    }
}
