<x-guest-layout>
    <!-- Enlace para volver a la página de inicio -->
    <div class="mb-4">
        <a href="{{ url('/') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
            {{ __('🡰 Volver al inicio') }}
        </a>
    </div>
    <!-- Estado de la sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Dirección de correo electrónico -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required autofocus autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <button type="button" class="text-gray-600 dark:text-gray-400"
                    onclick="togglePassword()">
                <span id="toggleText">Mostrar</span>
            </button>
        </div>


        <!-- Recordarme -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recordarme') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-3">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div>


        <!-- Enlace para registrarse -->
        <div class="mt-6 text-center">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>

        <div class="mt-6 text-center">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                {{ __('¿No tienes cuenta? Regístrate') }}
            </a>
        </div>
    </form>
</x-guest-layout>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleText = document.getElementById('toggleText');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleText.textContent = 'Ocultar';
        } else {
            passwordField.type = 'password';
            toggleText.textContent = 'Mostrar';
        }
    }
</script>
