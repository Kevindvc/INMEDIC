<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaMedicamento extends Model
{
    use HasFactory;

    protected $table = 'receta_medicamento';

    protected $fillable = [
        'receta_id',
        'medicamento_id',
        'dosis',
        'frecuencia',
        'duracion'
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class);
    }

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}