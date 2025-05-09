<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Excluimos los campos que no queremos actualizar (email, id_rol, id_usuari)
        $data = $request->except(['email', 'id_rol', 'id_usuari']);
    
        $request->user()->fill($data);
    
        // Si el número de teléfono es nulo o vacío, puedes eliminarlo o dejarlo tal cual
        if (empty($request->input('numero_tlf'))) {
            $request->user()->numero_tlf = null;
        }
    
        $request->user()->save();
    
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
