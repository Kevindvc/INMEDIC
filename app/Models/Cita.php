<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    // use hashFactory; // Removed as it is undefined
    protected $fillable = [
        'user_id',
        'doctor_id',
        'fecha_hora',
        'estado',
        'metodo',
        'especialidad',
        'enlace',
        'notas_adicionales',
    ];

    // Relación: una cita pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación: una cita pertenece a un doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
