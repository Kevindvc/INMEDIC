<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Medicamento extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['nombre', 'descripcion'];

    public function recetas()
    {
        return $this->belongsToMany(Receta::class, 'receta_medicamento')
                    ->withPivot('dosis', 'frecuencia', 'duracion')
                    ->withTimestamps();
    }
}
