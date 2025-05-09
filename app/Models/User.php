<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Establecer el nombre de la columna clave primaria
    protected $primaryKey = 'id_usuari';

    // Asegurarse de que el campo 'id_usuari' es autoincremental
    public $incrementing = true;
    
    // Definir el tipo de la clave primaria
    protected $keyType = 'int';

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',        // Agreguem username aqui
        'email',
        'password',
        'nom_usuari',      // Agregar 'nom_usuari' aquí si lo usas
        'cognom_usuari',   // Agregar 'cognom_usuari' aquí si lo usas
        'numero_tlf',      // Agregar 'numero_tlf' aquí si lo usas
        'id_rol',          // Agregar 'id_rol' si lo usas
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

    public function favorits()
    {
        return $this->hasMany(Favorit::class, 'id_usuari');
    }
}