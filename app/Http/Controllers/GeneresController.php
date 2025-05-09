<?php

namespace App\Http\Controllers;

use App\Models\Canciones;
use App\Models\Genere;
use Illuminate\Http\Request;

class GeneresController extends Controller
{
    // Método para mostrar los géneros
    public function showGeneros($nombre_genero)
    {
        // Convertir el nombre del género de la URL al formato correcto
        $nombre_genero = str_replace('_', ' ', strtolower($nombre_genero));
        
        // Buscar al género por su nombre
        $genere = Genere::where('nom_genere', 'LIKE', $nombre_genero)->first();
    
        if (!$genere) {
            // Si el genero no existe, redirigir o mostrar error
            return redirect()->route('home')->with('error', 'Género no encontrado');
        }
        
        // Obtener las canciones de ese genero
        $canciones = Canciones::where('id_genere', $genere->id_genere)->get();
        
        // Pasar los datos a la vista
        return view('genero.canciones', compact('genere', 'canciones'));
    }

    // Método para listar géneros a los administradores
    public function manage(Request $request)
    {
        // Obtener todos los géneros
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');

        $query = Genere::query();

        if($busqueda) { 
            $query->whereRaw('LOWER(nom_genere) LIKE ?', ['%' . strtolower($busqueda) . '%']);
        }

        switch ($orden) {
            case 'za':
                $query->orderBy('nom_genere', 'desc');
                break;
            case 'mas':
                $query->withCount('canciones')->orderBy('canciones_count', 'desc');
                break;
            default:
                $query->orderBy('nom_genere', 'asc');
                break;
        }
        
        $generos = $query->paginate(10)->withQueryString();
        
        return view('dashboard.manage_generos', compact('generos', 'orden', 'busqueda'));
    }    

    // Método para listar géneros al público
    public function index(Request $request)
    {
        // Obtener todos los géneros
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');

        $query = Genere::query();

        if($busqueda) { 
            $query->whereRaw('LOWER(nom_genere) LIKE ?', ['%' . strtolower($busqueda) . '%']);
        }

        switch ($orden) {
            case 'za':
                $query->orderBy('nom_genere', 'desc');
                break;
            case 'mas':
                $query->withCount('canciones')->orderBy('canciones_count', 'desc');
                break;
            default:
                $query->orderBy('nom_genere', 'asc');
                break;
        }
        
        $generos = $query->paginate(10)->withQueryString();
        
        return view('home.generos', compact('generos', 'orden', 'busqueda'));
    }

    // Método para crear un nuevo género
    public function store(Request $request)
    {
        $request->validate([
            'nom_genere' => 'required|max:50',
            'imatge_genere' => 'required|url',
        ]);
    
        Genere::create([
            'nom_genere' => $request->nom_genere,
            'n_cancons' => 0, // Inicializamos con 0 canciones
            'imatge_genere' => $request->imatge_genere,
        ]);
    
        return redirect()->route('manage_generos')->with('success', 'Género creado exitosamente.');
    }
    
    // Método para actualizar un género
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_genere' => 'required|max:50',
            'imatge_genere' => 'required|url',
        ]);

        $genere = Genere::findOrFail($id);
        $genere->update([
            'nom_genere' => $request->nom_genere,
            'imatge_genere' => $request->imatge_genere
        ]);

        return redirect()->route('manage_generos')->with('success', 'Género actualizado exitosamente.');
    }


    // Método para eliminar un género
    public function destroy($id)
    {
        $genere = Genere::findOrFail($id);
        $genere->delete();

        return redirect()->route('manage_generos')->with('success', 'Género eliminado exitosamente.');
    }
}
