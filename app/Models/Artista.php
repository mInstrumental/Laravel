<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    // Definir la tabla y las columnas que se pueden llenar
    protected $table = 'artista';
    protected $primaryKey = 'id_artista';  // Clave primaria
    protected $fillable = ['nom_artista', 'n_cancons', 'imatge_artista'];

    public $timestamps = true;

    public function canciones()
    {
        return $this->hasMany(Canciones::class, 'id_artista');
    }
}
