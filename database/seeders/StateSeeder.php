<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->insert([

            ['name' => 'Buenos Aires'],
            ['name' => 'Buenos Aires-GBA'],
            ['name' => 'Capital Federal'],
            ['name' => 'Catamarca'],
            ['name' => 'Chaco'],
            ['name' => 'Chubut'],
            ['name' => 'Córdoba'],
            ['name' => 'Corrientes'],
            ['name' => 'Entre Ríos'],
            ['name' => 'Formosa'],
            ['name' => 'Jujuy'],
            ['name' => 'La Pampa'],
            ['name' => 'La Rioja'],
            ['name' => 'Mendoza'],
            ['name' => 'Misiones'],
            ['name' => 'Neuquén'],
            ['name' => 'Río Negro'],
            ['name' => 'Salta'],
            ['name' => 'San Juan'],
            ['name' => 'San Luis'],
            ['name' => 'Santa Cruz'],
            ['name' => 'Santa Fe'],
            ['name' => 'Santiago del Estero'],
            ['name' => 'Tierra del Fuego'],
            ['name' => 'Tucumán']
        ]);
    }
}
