<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    use HasFactory;

    // Definir la tabla y las columnas que se pueden llenar
    protected $table = 'canco'; // nombre de la tabla
    protected $primaryKey = 'id_canco'; // clave primaria
    
    protected $fillable = [
        'nom_canco',
        'lletra_canco',
        'id_usuari',
        'id_artista',
        'id_genere',
        'link_spotify',
        'link_youtube',
        'link_apple',
        'link_amazon',
        'id_artista',
        'id_genere',
        'id_usuari',
    ];
    
    public function artista()
    {
        return $this->belongsTo(Artista::class, 'id_artista');
    }
    
    public function genere()
    {
        return $this->belongsTo(Genere::class, 'id_genere');
    }
    
    public function usuari()
    {
        return $this->belongsTo(User::class, 'id_usuari');
    }

    public function favoritos()
    {
        return $this->hasMany(Favorit::class, 'id_canco');
    }

    protected static function booted()
    {
        static::created(function ($canco) {
            $canco->genere?->increment('n_cancons');
            $canco->artista?->increment('n_cancons');
        });
    
        static::deleted(function ($canco) {
            $canco->genere?->decrement('n_cancons');
            $canco->artista?->decrement('n_cancons');
        });
    
        static::updating(function ($canco) {
            // Si cambia el género
            if ($canco->isDirty('id_genere')) {
                $originalGenere = Genere::find($canco->getOriginal('id_genere'));
                $nuevoGenere = Genere::find($canco->id_genere);
                $originalGenere?->decrement('n_cancons');
                $nuevoGenere?->increment('n_cancons');
            }
    
            // Si cambia el artista
            if ($canco->isDirty('id_artista')) {
                $originalArtista = Artista::find($canco->getOriginal('id_artista'));
                $nuevoArtista = Artista::find($canco->id_artista);
                $originalArtista?->decrement('n_cancons');
                $nuevoArtista?->increment('n_cancons');
            }
        });
    }
}
