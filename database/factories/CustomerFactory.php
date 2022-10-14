<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'name' => fake()->name(),
            // 'surname' => fake()->name(),
            // 'address' => Str::random(13),
            // 'phone' => Str::random(10),
            // 'email' => fake()->unique()->safeEmail(),
            // 'city_id' => 3,
        ];
    }
}
