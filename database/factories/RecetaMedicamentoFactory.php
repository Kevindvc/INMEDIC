<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecetaMedicamento>
 */
class RecetaMedicamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'receta_id' => \App\Models\Receta::factory(),
            'medicamento_id' => \App\Models\Medicamento::factory(),
            'dosis' => $this->faker->randomElement(['1 tableta', '5ml', '1 cápsula']),
            'frecuencia' => $this->faker->randomElement(['cada 8h', '2 veces al día', 'una vez al día']),
            'duracion' => $this->faker->randomElement(['5 días', '7 días', '10 días']),
        ];
    }
}
