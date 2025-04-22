<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    use HasFactory;

    protected $table = 'users';

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
    ];
}
