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
            [ 'name' => 'excento' ],
            [ 'name' => 'monotributista'],
            [ 'name' => 'consumidor final']
        ]);

    }
}
