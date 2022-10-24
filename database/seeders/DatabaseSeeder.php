<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Cliente;
use App\Models\Proveedor;
use Database\Factories\ClienteFactory;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([ 
            LocalidadSeeder::class, 
            // ClienteSeeder::class,
            IvaSeeder::class
        ]);
        Cliente::factory(100)->create();
        Proveedor::factory(100)->create();

    }
}
