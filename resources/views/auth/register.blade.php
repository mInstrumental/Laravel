<x-guest-layout class="mt-7">
    <style>
        img.block {
            margin-top: 60px;
        }

        div.w-full {
            margin-bottom: 60px;
        }
    </style>
    <!-- Enlace para volver a la página de inicio -->
    <div class="mb-4">
        <a href="{{ url('/') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
            {{ __('🡰 Volver al inicio') }}
        </a>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre real del usuario -->
        <div>
            <x-input-label for="nom_usuari">
                {{ __('Nombre') }} <span style="color: red">*</span>
            </x-input-label>
            <x-text-input id="nom_usuari" class="block mt-1 w-full" type="text" name="nom_usuari" :value="old('nom_usuari')" required autocomplete="nom_usuari" />
            <x-input-error :messages="$errors->get('nom_usuari')" class="mt-2" />
        </div>

        <!-- Apellido/s -->
        <div class="mt-4">
            <x-input-label for="cognom_usuari">
                {{ __('Apellido(s)') }} <span style="color: red">*</span>
            </x-input-label>
            <x-text-input id="cognom_usuari" class="block mt-1 w-full" type="text" name="cognom_usuari" :value="old('cognom_usuari')" required autocomplete="cognom_usuari" />
            <x-input-error :messages="$errors->get('cognom_usuari')" class="mt-2" />
        </div>

        <!-- username -->
        <div class="mt-4">
            <x-input-label for="username">
                {{ __('Username (tu nombre público)') }} <span style="color: red">*</span>
            </x-input-label>
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- E-mail -->
        <div class="mt-4">
            <x-input-label for="email">
                {{ __('Correo electrónico') }} <span style="color: red">*</span>
            </x-input-label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Número de teléfono -->
        <div class="mt-4">
            <x-input-label for="numero_tlf">
                {{ __('Número de teléfono') }}
            </x-input-label>
            <x-text-input id="numero_tlf" class="block mt-1 w-full" type="text" name="numero_tlf"
                :value="old('numero_tlf')" required autocomplete="tel"
                pattern="^[0-9]{9}$"
                title="Introduce un número de teléfono válido de 9 cifras" />
            <x-input-error :messages="$errors->get('numero_tlf')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password">
                {{ __('Contraseña') }} <span style="color: red">*</span>
            </x-input-label>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar contraseña -->
        <div class="mt-4">
            <x-input-label for="password_confirmation">
                {{ __('Confirmar contraseña') }} <span style="color: red">*</span>
            </x-input-label>
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('¿Ya tienes cuenta? Inicia sesión') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Regístrate') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
