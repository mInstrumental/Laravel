<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genere extends Model
{
    use HasFactory;

    protected $table = 'genere';  // Nombre de la tabla
    protected $primaryKey = 'id_genere';  // Clave primaria
    public $timestamps = true;

    protected $fillable = ['nom_genere', 'n_cancons', 'imatge_genere'];  // Campos rellenables

    public function canciones()
    {
        return $this->hasMany(Canciones::class, 'id_genere');
    }
}
