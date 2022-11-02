<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker-> firstname,
            'apellido' => $this->faker-> lastname,
            'direccion' => $this->faker-> streetAddress,
            'localidad' => $this->faker-> numberBetween(1,7),
            'telefono' => $this->faker-> phoneNumber,
            'email' => $this->faker->unique()-> freeEmail,
            'email_secundario' => $this->faker-> email,
            'dni' => $this->faker->randomNumber(8, true),
            'razon_social'=>$this->faker->company,
            'razon_social_direccion'=>$this->faker-> streetAddress,
            'razon_social_localidad'=>$this->faker-> numberBetween(1,7),
            'razon_social_cuit'=>$this->faker->numerify('23-#########-7')
        ];
    }
}
