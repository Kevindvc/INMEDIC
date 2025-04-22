<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctores';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'telefono',
        'especialidad',
    ];

    
    public function citas()
    {
        return $this->hasMany(Cita::class, 'doctor_id');
    }
}
