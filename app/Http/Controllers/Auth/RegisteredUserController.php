<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;  // Para la validación

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'nom_usuari' => ['required', 'string', 'max:100'],
            'cognom_usuari' => ['required', 'string', 'max:100'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'numero_tlf' => ['nullable', 'string', 'max:20'],
        ]);

        // Verifiquem si és el primer usuari
        $roleId = User::count() == 0 ? 1 : 2;  // El primer usuari tindrpa id_rol 1, l'altres 2

        // Crea el usuario
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'nom_usuari' => $request->nom_usuari,
            'cognom_usuari' => $request->cognom_usuari,
            'password' => Hash::make($request->password),
            'numero_tlf' => $request->numero_tlf,
            'id_rol' => $roleId, 
        ]);        

        // Evento de registro
        event(new Registered($user));

        // Inicia sesión automáticamente al crear el usuario
        Auth::login($user);

        // Redirige al dashboard
        return redirect('/');
    }
}


