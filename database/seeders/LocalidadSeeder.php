<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalidadSeeder extends Seeder
{
     
    public function run()
    {
        
        DB::table('localidades')->insert([
            [
            'nombre' => 'Villa María',
            'codigo_postal' => '5900',
            'created_at' => Now(),
            'updated_at' => Now()
        ], 
        [
            'nombre' => 'Bell Ville',
            'codigo_postal' => '2550',
            'created_at' => Now(),
            'updated_at' => Now()
        ],
        [
            'nombre' => 'Morrison',
            'codigo_postal' => '2568',
            'created_at' => Now(),
            'updated_at' => Now()
        ],
        [
            'nombre' => 'Tio Pujio',
            'codigo_postal' => '5936',
            'created_at' => Now(),
            'updated_at' => Now()
        ],
        [
            'nombre' => 'Villa Nueva',
            'codigo_postal' => '5903',
            'created_at' => Now(),
            'updated_at' => Now()
        ],
        [
            'nombre' => 'Oliva',
            'codigo_postal' => '5980',
            'created_at' => Now(),
            'updated_at' => Now()
        ],
        [
            'nombre' => 'Córdoba',
            'codigo_postal' => '5000',
            'created_at' => Now(),
            'updated_at' => Now()
        ]]);

    }
}
