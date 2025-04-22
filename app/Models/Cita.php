<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Cita extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'doctor_id', 'fecha_hora', 'estado', 'metodo',
        'especialidad', 'enlace', 'notas_adicionales'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function consulta()
    {
        return $this->hasOne(Consulta::class);
    }
}