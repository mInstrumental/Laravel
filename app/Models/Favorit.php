<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si el nombre sigue la convención)
    protected $table = 'favorits';

    // Campos que pueden asignarse masivamente
    protected $fillable = [
        'id_usuari',
        'id_canco',
        'favorit',
    ];

    // Si no usas created_at y updated_at
    public $timestamps = false;

    // Relaciones
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuari');
    }

    public function canco()
    {
        return $this->belongsTo(Canciones::class, 'id_canco');
    }

    
}
