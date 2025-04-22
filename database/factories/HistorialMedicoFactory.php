<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistorialMedico>
 */
class HistorialMedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'altura' => $this->faker->randomFloat(2, 1.50, 2.00),
            'peso' => $this->faker->randomFloat(2, 50, 100),
            'masa' => $this->faker->randomFloat(2, 18, 30),
            'temp' => $this->faker->randomFloat(2, 36.0, 38.5),
            'alergias' => $this->faker->sentence(),
            'ant_pat' => $this->faker->sentence(),
        ];
    }
}
