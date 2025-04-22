<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class RecetaMedicamento extends Pivot
{
    use HasFactory, Notifiable;
    protected $table = 'receta_medicamento';

    protected $fillable = [
        'receta_id', 'medicamento_id', 'dosis', 'frecuencia', 'duracion'
    ];
}
