<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use App\Notifications\CustomResetPassword; 

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre', 'email', 'password','email_verified_at', 'telefono', 'estado', 'fecha_nacimiento',
        'vales', 'alergia', 'patologias', 'plan', 'genero'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
    public function historialMedico()
    {
        return $this->hasOne(HistorialMedico::class, 'user_id');
    }

    public function sendPasswordResetNotification($token)
{
    $this->notify(new CustomResetPassword($token, $this->email));
}
}
