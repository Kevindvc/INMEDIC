<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctores'; // Si difiere del plural en inglés
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'telefono',
        'especialidad',
        'imagen_url'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}