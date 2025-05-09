<?php

namespace App\Http\Controllers;

use App\Models\User;  // Usar el modelo User
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;  // Para encriptar la contraseña
use Illuminate\Support\Facades\Validator;  // Para la validación


class UsersController extends Controller
{
    // Método para mostrar usuarios
    public function index(Request $request)
    {
        $orden = $request->input('orden', 'az');
        $busqueda = $request->input('busqueda');

        $query = User::query();

        if ($busqueda) {
            $query->whereRaw('LOWER(username) LIKE ?', ['%' . strtolower($busqueda) . '%']);
        }
        
        switch ($orden) {
            case 'za':
                $query->orderBy('username', 'desc');
                break;
            default:
                $query->orderBy('username', 'asc');
                break;
        }

        $usuarios = User::all();
        $usuarios = $query->paginate(10)->withQueryString();

        return view('dashboard.manage_usuarios', compact('usuarios', 'orden', 'busqueda'));
    }

    // Método para actualizar usuario
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
    
        return redirect()->back()->with('success', 'Usuario actualizado correctamente.');
    }
    
    // Método para eliminar usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->back()->with('success', 'Usuario eliminado correctamente.');
    }
}
