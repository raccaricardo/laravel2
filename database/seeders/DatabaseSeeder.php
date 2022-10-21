<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use Database\Factories\ClienteFactory;
use Illuminate\Database\Seeder;

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
            // IvaSeeder::class
        ]);
        Cliente::factory(100)->create();
    }
}
