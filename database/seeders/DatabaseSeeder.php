<?php

namespace Database\Seeders;

use App\Models\Cita;
use App\Models\Consulta;
use App\Models\Doctor;
use App\Models\HistorialMedico;
use App\Models\Medicamento;
use App\Models\Receta;
use App\Models\RecetaMedicamento;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'nombre' => 'Gustavo Gamero',
            'email' => 'tavogamero@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
            'telefono' => '123456789',
            'estado' => 1,
            'fecha_nacimiento' => '1997-01-01',
            'vales' => 3,
            'alergia' => 'Ninguna',
            'patologias' => 'Ninguna',
            'plan' => 'basico',
            'genero' => 'Masculino',
        ]);

        User::factory(9)->create();
        Doctor::factory(10)->create();
        Cita::factory(10)->create();
        Consulta::factory(10)->create();
        HistorialMedico::factory(10)->create();
        Medicamento::factory(10)->create();
        Receta::factory(10)->create();
        RecetaMedicamento::factory(10)->create();
    }
}
