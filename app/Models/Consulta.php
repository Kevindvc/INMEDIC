<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Consulta extends Model
{   
    use HasFactory, Notifiable;
    protected $fillable = ['cita_id', 'sintomas', 'diagnostico', 'tratamiento'];

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }

    public function receta()
    {
        return $this->hasOne(Receta::class);
    }
}