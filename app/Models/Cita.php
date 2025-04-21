<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'fecha_hora',
        'estado',
        'metodo',
        'especialidad',
        'enlace',
        'notas_adicionales'
    ];

    protected $casts = [
        'fecha_hora' => 'datetime'
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