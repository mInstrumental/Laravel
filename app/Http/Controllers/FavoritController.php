<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Canciones;
use App\Models\Genere;
use Illuminate\Http\Request;
use App\Models\Favorit;
use Illuminate\Support\Facades\Auth;

class FavoritController extends Controller
{    
    public function toggle(Request $request)
    {
        $request->validate([
            'id_usuari' => 'required|integer',
            'id_canco' => 'required|integer',
        ]);

        $favorit = Favorit::where('id_usuari', $request->id_usuari)
                        ->where('id_canco', $request->id_canco)
                        ->first();

        if ($favorit) {
            $favorit->delete();
        } else {
            Favorit::create([
                'id_usuari' => $request->id_usuari,
                'id_canco' => $request->id_canco,
                'favorit' => true,
            ]);
        }

        $cancion = Canciones::find($request->id_canco);
        $artista = $cancion->artista;

        return redirect()->route('canciones.mostrar', [
            'nombre_artista' => str_replace(' ', '_', strtolower($artista->nom_artista)),
            'nombre_cancion' => str_replace(' ', '_', strtolower($cancion->nom_canco)),
        ]);
    }
   

    public function misFavs(Request $request)
    {
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');
        $userId = Auth::id(); // ID del usuario autenticado
    
        // Construir la query para obtener solo las canciones favoritas del usuario actual
        $query = Canciones::whereHas('favoritos', function ($query) use ($userId) {
            $query->where('id_usuari', $userId)
                  ->where('favorit', true); // Filtrar solo las canciones marcadas como favoritas
        })->with(['genere', 'artista']);
    
        if ($busqueda) {
            $query->whereRaw('LOWER(nom_canco) LIKE ?', ['%' . strtolower($busqueda) . '%']);
        }
    
        switch ($orden) {
            case 'za':
                $query->orderBy('nom_canco', 'desc');
                break;
            default:
                $query->orderBy('nom_canco', 'asc');
                break;
        }
    
        $canciones = $query->paginate(10)->withQueryString();
    
        return view('home.mis_favoritos', compact('canciones', 'orden', 'busqueda'));
    }    
}
