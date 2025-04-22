<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class HistorialMedico extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'historial_medico';
    protected $primaryKey = 'id_historial';

    protected $fillable = [
        'user_id', 'altura', 'peso', 'masa', 'temp', 'alergias', 'ant_pat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
