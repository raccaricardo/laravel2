<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Ricardo',
                'surname' => 'Racca',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'ricardoemanuelracca@gmail.com',
                'city_id' => 3,
            ],
            [
                'name' => 'Exequiel',
                'surname' => 'Palacios',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'exepalacios@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Juan',
                'surname' => 'Foyth',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'jfoyth@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Nicolas',
                'surname' => 'Gonzalez',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'nicogonzalez33@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Alejando',
                'surname' => 'Gomez',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'papugomez@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Angel',
                'surname' => 'Di Maria',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'adimaria@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Cristiano',
                'surname' => 'Ronaldo',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'cristiano@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Lautaro',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'surname' => 'Martinez',
                'email' => 'martinez@gmail.com',
                'city_id' => 1,
            ],
            [
                'name' => 'Lionel',
                'surname' => 'Scaloni',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'Scaloni@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Emiliano',
                'surname' => 'Martinez',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'dibumartinez@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Nahuel',
                'surname' => 'Molina',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'molina@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Rodrigo',
                'surname' => 'De Paul',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'depaul@gmail.com',
                'city_id' => 2,
            ],

            [
                'name' => 'Leandro',
                'surname' => 'Paredes',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'paredes@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Cristian',
                'surname' => 'Romero',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'cromero@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Thiago',
                'surname' => 'Almada',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'talmada1@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Nicolas',
                'surname' => 'Otamendi',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'nicoota@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Lionel',
                'surname' => 'Messi',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'liomessi@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Lautaro',
                'surname' => 'Martinez',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'martinezlautaro@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Franco',
                'surname' => 'Armani',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'farmani@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Geronimo',
                'surname' => 'Rulli',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'gerorulli@gmail.com',
                'city_id' => 2,
            ],
            [
                'name' => 'Gio',
                'surname' => 'Lo celso',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'locelso@gmail.com',
                'city_id' => 3,
            ],
            [
                'name' => 'guido',
                'surname' => 'rodriguez',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'grodriguez@gmail.com',
                'city_id' => 3,
            ],
            [
                'name' => 'Nicolas',
                'surname' => 'Tagliafico',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'nicotaglia@gmail.com',
                'city_id' => 3,
            ],
            [
                'name'  => 'Enzo',
                'surname' => 'Fernandez',
                'address' => Str::random(13),
                'phone' => Str::random(10),
                'email' => 'enzofernandez@gmail.com',
                'city_id' => 3,
            ],
        ]);
    }
}
