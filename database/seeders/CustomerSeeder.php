<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Ricardo',
            'surname'=> 'Racca',
            'email' => 'ricardoemanuelracca@gmail.com',
            'city_id' => 3,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Exequiel',
            'surname'=> 'Palacios',
            'email' => 'exepalacios@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Juan',
            'surname'=> 'Foyth',
            'email' => 'jfoyth@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Nicolas',
            'surname'=> 'Gonzalez',
            'email' => 'nicogonzalez33@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Alejando',
            'surname'=> 'Gomez',
            'email' => 'papugomez@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Angel',
            'surname'=> 'Di Maria',
            'email' => 'adimaria@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Cristiano',
            'surname'=> 'Ronaldo',
            'email' => 'cristiano@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Lautaro',
            'surname'=> 'Martinez',
            'email' => 'martinez@gmail.com',
            'city_id' => 1,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Lionel',
            'surname'=> 'Scaloni',
            'email' => 'Scaloni@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Emiliano',
            'surname'=> 'Martinez',
            'email' => 'dibumartinez@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Nahuel',
            'surname'=> 'Molina',
            'email' => 'molina@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Rodrigo',
            'surname'=> 'De Paul',
            'email' => 'depaul@gmail.com',
            'city_id' => 2,
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Leandro',
            'surname'=> 'Paredes',
            'email' => 'paredes@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Cristian',
            'surname'=> 'Romero',
            'email' => 'cromero@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Thiago',
            'surname'=> 'Almada',
            'email' => 'talmada1@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Nicolas',
            'surname'=> 'Otamendi',
            'email' => 'nicoota@gmail.com',
            'city_id' => 2,
        ]);

        DB::table('customers')->insert([ 
            'name' => 'Lionel',
            'surname'=> 'Messi',
            'email' => 'liomessi@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Lautaro',
            'surname'=> 'Martinez',
            'email' => 'martinezlautaro@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Franco',
            'surname'=> 'Armani',
            'email' => 'farmani@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Geronimo',
            'surname'=> 'Rulli',
            'email' => 'gerorulli@gmail.com',
            'city_id' => 2,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Gio',
            'surname'=> 'Lo celso',
            'email' => 'locelso@gmail.com',
            'city_id' => 3,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'guido',
            'surname'=> 'rodriguez',
            'email' => 'grodriguez@gmail.com',
            'city_id' => 3,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Nicolas',
            'surname'=> 'Tagliafico',
            'email' => 'nicotaglia@gmail.com',
            'city_id' => 3,
        ]);
        DB::table('customers')->insert([ 
            'name' => 'Enzo',
            'surname'=> 'Fernandez',
            'email' => 'enzofernandez@gmail.com',
            'city_id' => 3,
        ]);
    }
}
