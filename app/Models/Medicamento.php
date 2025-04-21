<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function recetas()
    {
        return $this->belongsToMany(Receta::class, 'receta_medicamento')
                    ->withPivot('dosis', 'frecuencia', 'duracion');
    }
}