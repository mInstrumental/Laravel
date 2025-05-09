<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:50'],
            'nom_usuari' => ['required', 'string', 'max:100'],
            'cognom_usuari' => ['required', 'string', 'max:100'],
            'password' => ['nullable', 'string', 'min:8'], // Puede ser opcional si el usuario no desea cambiarla
            'numero_tlf' => ['nullable', 'digits:9'], // Opcional y puede ser nulo
            // Excluimos la validación del 'email', 'id_rol', 'id_usuari'
        ];
    } 
    public function messages(): array
    {
        return [
            'numero_tlf.digits' => 'El número de teléfono debe tener exactamente 9 dígitos.',
        ];
    }   
}
