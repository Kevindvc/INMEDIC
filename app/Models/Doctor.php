<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'doctores';
    
    protected $fillable = ['nombre', 'email', 'password', 'telefono', 'especialidad','imagen_url'];

    protected $hidden = ['password'];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

}