<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'telefono',
        'estado',
        'fecha_nacimiento',
        'vales',
        'alergia',
        'patologias',
        'plan',
        'genero'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'fecha_nacimiento' => 'date',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function historialMedico()
    {
        return $this->hasOne(HistorialMedico::class);
    }
}