<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cita_id',
        'sintomas',
        'diagnostico',
        'tratamiento'
    ];

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }

    public function recetas()
    {
        return $this->hasMany(Receta::class);
    }
}