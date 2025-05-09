<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Canciones;
use Illuminate\Http\Request;

class ArtistesController extends Controller
{
    // Mostrar las canciones de un artista
    public function showCanciones($nombre_artista)
    {
        // Convertir el nombre del artista de la URL al formato correcto
        $nombre_artista = str_replace('_', ' ', strtolower($nombre_artista));
    
        // Buscar al artista por su nombre
        $artista = Artista::where('nom_artista', 'LIKE', $nombre_artista)->first();

        if (!$artista) {
            // Si el artista no existe, redirigir o mostrar error
            return redirect()->route('home')->with('error', 'Artista no encontrado');
        }
    
        // Obtener las canciones de ese artista
        $canciones = Canciones::where('id_artista', $artista->id_artista)->get();
    
        // Pasar los datos a la vista
        return view('artista.canciones', compact('artista', 'canciones'));
    }
    

    // Mostrar todos los artistas para administradores
    public function manage(Request $request)
    {
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');
    
        $query = Artista::query();
    
        // Filtro de búsqueda (insensible a mayúsculas/minúsculas)
        if ($busqueda) {
            $query->whereRaw('LOWER(nom_artista) LIKE ?', ['%' . strtolower($busqueda) . '%']);
        }
    
        // Orden
        switch ($orden) {
            case 'za':
                $query->orderBy('nom_artista', 'desc');
                break;
            case 'mas':
                $query->withCount('canciones')->orderBy('canciones_count', 'desc');
                break;
            default:
                $query->orderBy('nom_artista', 'asc');
                break;
        }
    
        $artistas = $query->paginate(10)->withQueryString();
    
        return view('dashboard.manage_artistas', compact('artistas', 'orden', 'busqueda'));
    }    

    // Mostrar todos los artistas para el público
    public function index(Request $request)
    {
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');
    
        $query = Artista::query();
    
        // Filtro de búsqueda (insensible a mayúsculas/minúsculas)
        if ($busqueda) {
            $query->whereRaw('LOWER(nom_artista) LIKE ?', ['%' . strtolower($busqueda) . '%']);
        }
    
        // Orden
        switch ($orden) {
            case 'za':
                $query->orderBy('nom_artista', 'desc');
                break;
            case 'mas':
                $query->withCount('canciones')->orderBy('canciones_count', 'desc');
                break;
            default:
                $query->orderBy('nom_artista', 'asc');
                break;
        }
    
        $artistas = $query->paginate(10)->withQueryString();
    
        return view('home.artistas', compact('artistas', 'orden', 'busqueda'));
    }    
    
    // Almacenar un nuevo artista
    public function store(Request $request)
    {
        $request->validate([
            'nom_artista' => 'required|string|max:100',
            'imatge_artista' => 'required|url',
        ]);

        Artista::create([
            'nom_artista' => $request->nom_artista,
            'n_cancons' => 0, // Inicializamos con 0 canciones
            'imatge_artista' => $request->imatge_artista,
        ]);

        return redirect()->route('manage_artistas')->with('success', 'Artista añadido correctamente.');
    }

    // Actualizar la información de un artista
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_artista' => 'required|string|max:100',
            'imatge_artista' => 'required|url',
        ]);

        $artista = Artista::findOrFail($id);
        $artista->update([
            'nom_artista' => $request->nom_artista,
            'imatge_artista' => $request->imatge_artista,
        ]);

        return redirect()->route('manage_artistas')->with('success', 'Artista actualizado correctamente.');
    }

    // Eliminar un artista
    public function destroy($id)
    {
        $artista = Artista::findOrFail($id);
        $artista->delete();

        return redirect()->route('manage_artistas')->with('success', 'Artista eliminado correctamente.');
    }
}
