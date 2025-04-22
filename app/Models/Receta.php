<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Receta extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['consulta_id', 'fecha_emision'];

    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }

    public function medicamentos()
    {
        return $this->belongsToMany(Medicamento::class, 'receta_medicamento')
                    ->withPivot('dosis', 'frecuencia', 'duracion')
                    ->withTimestamps();
    }
}