<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    public function definition()
    {
        return [
            'localidad' => $this->faker-> numberBetween(1,7),
            'condicion_fiscal' => $this->faker-> numberBetween(1,3),
            'nombre' => $this->faker-> company,
            'razon_social' => $this->faker-> company, 
            'cuit' => $this->faker-> numerify('23-#########-7'),
            'direccion' => $this->faker-> streetAddress,
            'telefono' => $this->faker-> phoneNumber,
            'email' => $this->faker-> FreeEmail,
            'sitio_web' => $this->faker-> url
        ];
    }
    }
