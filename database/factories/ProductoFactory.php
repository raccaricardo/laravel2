<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductoFactory extends Factory
{

    public function definition()
    {
        return [
            'subcategoria' => $this->faker-> numberBetween(1,3),
            'proveedor' => $this->faker-> numberBetween(1,3),
            'fabricante' => $this->faker->unique()-> company,
            'nombre' => $this->faker-> company,
            'nombre_alternativo' => $this->faker->unique()-> numerify('23-#########-7'),
            'descripcion' => $this->faker-> streetAddress,
            'costo' => $this->faker-> phoneNumber,
            'iva' => $this->faker-> FreeEmail,
            'stock' => $this->faker-> url,
            'garantia' => $this->faker-> url,
            'codigo_upc' => $this->faker-> url,
            'stock_minimo' => $this->faker-> url,
            'stock_maximo' => $this->faker-> url,
            'imagen' => $this->faker-> url,
            'oferta'=> $this->faker-> url,
        ];
    }
}
