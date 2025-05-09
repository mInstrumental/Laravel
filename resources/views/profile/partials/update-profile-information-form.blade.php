<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Actualiza la información de tu cuenta.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Nombre de usuario -->
        <div>
            <x-input-label for="username" :value="__('* Username')" />
            <x-text-input id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username', $user->username)" required autofocus autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        <!-- Nombre -->
        <div>
            <x-input-label for="nom_usuari" :value="__('* Nombre')" />
            <x-text-input id="nom_usuari" name="nom_usuari" type="text" class="mt-1 block w-full" :value="old('nom_usuari', $user->nom_usuari)" required autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('nom_usuari')" />
        </div>

        <!-- Apellidos -->
        <div>
            <x-input-label for="cognom_usuari" :value="__('* Apellidos')" />
            <x-text-input id="cognom_usuari" name="cognom_usuari" type="text" class="mt-1 block w-full" :value="old('cognom_usuari', $user->cognom_usuari)" required autocomplete="surname" />
            <x-input-error class="mt-2" :messages="$errors->get('cognom_usuari')" />
        </div>

        <!-- Número de teléfono -->
        <div>
            <x-input-label for="numero_tlf" :value="__('Número de teléfono')" />
            <x-text-input id="numero_tlf" name="numero_tlf" type="text" class="mt-1 block w-full" :value="old('numero_tlf', $user->numero_tlf)" autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('numero_tlf')" />
        </div>

        <!-- Correo electrónico (solo visualización, no editable) -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required disabled />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <p class="mb-2" style="color: red;">Los campos con * son obligatorios</p>
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>

<script>
    document.addEventListener('submit', function (event) {
        const formData = new FormData(event.target);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });
        console.log('Form data being submitted:', data);
    });
</script>
