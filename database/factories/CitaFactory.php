<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
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
            'doctor_id' => \App\Models\Doctor::factory(),
            'fecha_hora' => $this->faker->dateTimeBetween('now', '+1 week'),
            'estado' => $this->faker->randomElement(['Pendiente', 'Confirmada', 'Cancelada', 'Completada']),
            'metodo' => $this->faker->randomElement(['videollamada', 'llamada', 'SMS']),
            'especialidad' => $this->faker->word(),
            'enlace' => $this->faker->url(),
            'notas_adicionales' => $this->faker->sentence(),
        ];
    }
}
