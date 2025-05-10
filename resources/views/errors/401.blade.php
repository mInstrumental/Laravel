@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ __('Error') }}
            </h2>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <script src="{{ asset('js/logo.js') }}"></script>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <section>
                            <div style="text-align: center; padding: 50px;">
                                <div>
                                    <img src="{{ asset('images/logoBlanco.png') }}" alt="Logo" class="mx-auto mb-4 logo" style="max-width: 30%;">
                                </div>
                                <h1>¡Ups!</h1>
                                <p>La página solicitada no existe o no se encuentra en este momento.</p>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </x-app-user>
@else
    <x-app-noUser>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ __('Error') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <script src="{{ asset('js/logo.js') }}"></script>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <section>
                            <div style="text-align: center; padding: 50px;">
                                <div>
                                    <img src="{{ asset('images/logoBlanco.png') }}" alt="Logo" class="mx-auto mb-4 logo" style="max-width: 30%;">
                                </div>
                                <h1>¡Ups!</h1>
                                <p>La página solicitada no existe o no se encuentra en este momento.</p>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
