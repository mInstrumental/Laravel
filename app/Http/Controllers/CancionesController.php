<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Canciones;
use App\Models\Genere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CancionesController extends Controller
{
    // Método para listar canciones a los administradores
    public function manage(Request $request)
    {
        // Obtener todos los géneros
        $canciones = Canciones::with(['genere', 'artista', 'usuari'])->get();

        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');

        $query = Canciones::query();

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

        // Pasar los generos a ambas vistas
        return view('dashboard.manage_canciones', compact('canciones', 'orden', 'busqueda'));
    }
    
    // Método para listar géneros al público
    public function index(Request $request)
    {
        // Obtener todos los géneros
        $canciones = Canciones::with(['genere', 'artista', 'usuari'])->get();

        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');

        $query = Canciones::query();

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

        // Pasar los generos a ambas vistas
        return view('home.canciones', compact('canciones', 'orden', 'busqueda'));
    }

    public function misCanciones(Request $request)
    {
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');
        $userId = Auth::id(); // ID del usuario autenticado

        // Construir la query solo con las canciones del usuario actual
        $query = Canciones::where('id_usuari', $userId)->with(['genere', 'artista']);

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

        return view('home.mis_canciones', compact('canciones', 'orden', 'busqueda'));
    }

    // Mostrar las canciones de un artista
    public function showCancion($nombre_artista, $nombre_cancion)
    {
        // Normaliza nombres desde la URL
        $nombre_artista = str_replace('_', ' ', strtolower($nombre_artista));
        $nombre_cancion = str_replace('_', ' ', strtolower($nombre_cancion));
    
        // Busca el artista
        $artista = Artista::whereRaw('LOWER(nom_artista) = ?', [$nombre_artista])->first();
    
        if (!$artista) {
            return redirect()->route('home')->with('error', 'Artista no encontrado');
        }
    
        // Busca la canción específica del artista
        $cancion = Canciones::where('id_artista', $artista->id_artista)
            ->whereRaw('LOWER(nom_canco) = ?', [$nombre_cancion])
            ->first();
    
        if (!$cancion) {
            return redirect()->route('home')->with('error', 'Canción no encontrada');
        }
    
        // Trae todos los géneros (por si quieres mostrar el género de la canción o un menú)
        $generes = Genere::all();
    
        return view('canciones.mostrar', compact('artista', 'cancion', 'generes'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'nom_canco' => 'required|string|max:100',
                'lletra_canco' => 'required|string',
                'id_artista' => 'required|exists:artista,id_artista',
                'id_genere' => 'required|exists:genere,id_genere',
                'link_spotify' => 'nullable|string',
                'link_youtube' => 'nullable|string',
                'link_apple' => 'nullable|string',
                'link_amazon' => 'nullable|string',
            ]);
    
            $validated['id_usuari'] = auth()->id();
            $validated['link_spotify'] = $validated['link_spotify'] ?? '#';
            $validated['link_youtube'] = $validated['link_youtube'] ?? '#';
            $validated['link_apple'] = $validated['link_apple'] ?? '#';
            $validated['link_amazon'] = $validated['link_amazon'] ?? '#';
    
            Canciones::create($validated);
    
            return redirect()->route('canciones')->with('success', 'Cançó guardada correctament.');
        }
    
        // Si es GET, carga los datos para el formulario
        $canciones = Canciones::with(['genere', 'artista', 'usuari'])->get();
        $artistas = Artista::all();
        $generes = Genere::all();
    
        return view('canciones.write', compact('canciones', 'artistas', 'generes'));
    }    

    public function update(Request $request, $id)
    {    
        // Validar directamente
        $request->validate([
            'nom_canco' => 'required|string|max:100',
            'link_spotify' => 'nullable|string',
            'link_youtube' => 'nullable|string',
            'link_apple' => 'nullable|string',
            'link_amazon' => 'nullable|string',
        ]);
    
        // Buscar la canción
        $cancion = Canciones::findOrFail($id);
    
        // Actualizar con valores del request, usando '#' por defecto si viene vacío
        $cancion->update([
            'nom_canco' => $request->nom_canco,
            'link_spotify' => $request->link_spotify ?: '#',
            'link_youtube' => $request->link_youtube ?: '#',
            'link_apple' => $request->link_apple ?: '#',
            'link_amazon' => $request->link_amazon ?: '#',
        ]);
    
        return redirect()->route('manage_canciones')->with('success', 'Canción actualizada correctamente.');
    }

    public function editCancion($nombre_artista, $nombre_cancion)
    {
        // Normaliza nombres desde la URL
        $nombre_artista = str_replace('_', ' ', strtolower($nombre_artista));
        $nombre_cancion = str_replace('_', ' ', strtolower($nombre_cancion));
    
        // Busca artista y canción
        $artista = Artista::whereRaw('LOWER(nom_artista) = ?', [$nombre_artista])->firstOrFail();
        $cancion = Canciones::where('id_artista', $artista->id_artista)
            ->whereRaw('LOWER(nom_canco) = ?', [$nombre_cancion])
            ->firstOrFail();
    
        // Verifica permisos
        $user = auth()->user();
        if ($cancion->id_usuari !== $user->id_usuari && $user->id_rol != 1) {
            return redirect()->route('home')->with('error', 'No tienes permiso para editar esta canción.');
        }
    
        // Carga géneros para el select
        $generes = Genere::all();
        $artistas = Artista::all();
    
        // Muestra la vista con los datos
        return view('canciones.editar', compact('cancion', 'generes', 'artistas'));
    }

    public function updateCancion(Request $request, $nombre_artista, $nombre_cancion)
    {
        $nombre_artista = str_replace('_', ' ', strtolower($nombre_artista));
        $nombre_cancion = str_replace('_', ' ', strtolower($nombre_cancion));

        $artista = Artista::whereRaw('LOWER(nom_artista) = ?', [$nombre_artista])->firstOrFail();
        $cancion = Canciones::where('id_artista', $artista->id_artista)
            ->whereRaw('LOWER(nom_canco) = ?', [$nombre_cancion])
            ->firstOrFail();

        $user = auth()->user();
        if ($cancion->id_usuari !== $user->id_usuari && $user->id_rol != 1) {
            return redirect()->route('home')->with('error', 'No tienes permiso para editar esta canción.');
        }

        $request->validate([
            'nom_canco' => 'required|string|max:100',
            'lletra_canco' => 'required|string',
            'id_artista' => 'required|exists:artista,id_artista',
            'id_genere' => 'required|exists:genere,id_genere',
        ]);

        $cancion->update([
            'nom_canco' => $request->nom_canco,
            'lletra_canco' => $request->lletra_canco,
            'id_artista' => $request->id_artista,
            'id_genere' => $request->id_genere,
        ]);

        return redirect()->route('canciones.mostrar', [
            'nombre_artista' => str_replace(' ', '_', strtolower($cancion->artista->nom_artista)),
            'nombre_cancion' => str_replace(' ', '_', strtolower($cancion->nom_canco)),
        ])->with('success', 'Canción actualizada correctamente.');
            
    }


      
    public function destroy($id)
    {
        $cancion = Canciones::findOrFail($id);
        $cancion->delete();
    
        return redirect()->route('manage_canciones')->with('success', 'Cançó eliminada correctament.');
    }   
}
