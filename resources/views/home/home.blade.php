@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-house"></i> {{ __('Home') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <script src="{{ asset('js/logo.js') }}"></script>
            <style>
                @media (max-width: 1024px) {
                    .grid-cols-2 {
                        grid-template-columns: 1fr;
                        text-align: center;
                    }

                    .columna-vertical {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        gap: 1.5rem;
                        padding: 1.5rem;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-2xl font-semibold">
                            <i class="fa-solid fa-hand"></i> Bienvenido, <strong>{{ auth()->user()->nom_usuari }} {{ auth()->user()->cognom_usuari }}</strong>
                        </h2>
                        <p class="mt-2">Navega por mInstrumental, y descubre todas sus funciones.</p>

                        <br>

                        <a href="libreria_acordes" class="bg-blue-500 hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <i class="fa-solid fa-book"></i> Libreria de Acordes
                        </a>
                        <a href="artistas" class="bg-blue-500 hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <i class="fas fa-music"></i> Artistas / Grupos
                        </a>
                        <a href="generos" class="bg-blue-500 hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <i class="fas fa-tags"></i> Géneros
                        </a>
                        <a href="canciones" class="bg-blue-500 hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <i class="fas fa-compact-disc"></i> Canciones
                        </a>
                    </div>

                    <hr><br>
                        
                    <div class="grid grid-cols-2 gap-6 text-gray-900 dark:text-gray-100">
                        <!-- Columna izquierda -->
                        <div>
                            <img src="{{ asset('images/logoBlanco.png') }}" alt="Logo" class="mx-auto logo" style="max-width: 45%;">
                        </div>

                        <!-- Columna derecha -->
                        <div>
                            <h2 class="text-xl"><strong>mInstrumental</strong></h2>
                            <br>
                            <p>
                                mInstrumental es una página web hecha para músicos, aquí podrás tener los acordes de tus artistas, géneros o canciones favoritas.
                                También cuenta con un apartado para poder aprender a tocar guitarra, piano, violín, entre otros instrumentos!
                                Cuenta con la opción de una librería de acordes, y también poder escribir tú las canciones con los acordes de otros artistas y poder publicarlo,
                                guarda tus canciones favoritas, y cualquier duda que tengas puedes ir al foro, y cualquier otro usuario podrá resolverla.
                                Navega por la página web y descubre todas sus funciones.
                            </p>
                        </div>
                    </div>

                    <h2 style="text-align: center;" class="text-gray-900 dark:text-gray-100 mt-6 mb-2 text-xl">RECURSOS</h2>

                    <div class="flex flex-wrap justify-center gap-6 p-6 columna-vertical">
                        <div class="w-full sm:w-1/2 lg:w-1/3">
                            <a href="afinar_instrumento" class="block">
                                <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                    <img src="{{ asset('images/AfinarInstrumento.jpg') }}" alt="Imagen Guitarra" class="w-full h-48 object-cover">
                                    <div class="p-4 text-center">
                                        <h2 class="text-xl font-bold mb-2">Afinar un instrumento</h2>
                                        <p class="text-gray-600">Antes de tocar cualquier canción, lo mejor será afinar un poco.</p>
                                    </div>
                                </section>
                            </a>
                        </div>
                        
                        <div class="w-full sm:w-1/2 lg:w-1/3">
                            <a href="libreria_acordes" class="block">
                                <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                    <img src="{{ asset('images/LibreriaDeAcordes.jpg') }}" alt="Imagen Piano" class="w-full h-48 object-cover">
                                    <div class="p-4 text-center">
                                        <h2 class="text-xl font-bold mb-2">Librería de Acordes</h2>
                                        <p class="text-gray-600">Aquí encontrarás variedad de acordes, teoría musical y curiosidades sobre instrumentos.</p>
                                    </div>
                                </section>
                            </a>
                        </div>
                            
                        <div class="w-full sm:w-1/2 lg:w-1/3">
                            <a href="foro" class="block">
                                <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                    <img src="{{ asset('images/InstrumentosMusicales.jpg') }}" alt="Imagen Violín" class="w-full h-48 object-cover">
                                    <div class="p-4 text-center">
                                        <h2 class="text-xl font-bold mb-2">Foro de mInstrumental</h2>
                                        <p class="text-gray-600">¿Tienes alguna duda? Entra en el foro, pregunta o responde.</p>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </x-app-user>
@else
    <x-app-noUser>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-house"></i> {{ __('Home') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <script src="{{ asset('js/logo.js') }}"></script>
            <style>
                @media (max-width: 1024px) {
                    .grid-cols-2 {
                        grid-template-columns: 1fr;
                        text-align: center;
                    }

                    .columna-vertical {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        gap: 1.5rem;
                        padding: 1.5rem;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-2xl font-semibold">
                            <i class="fa-solid fa-hand"></i> ¡Hola músico! ¿Has visto las ventajas de registrase en mInstrumental?</strong>
                        </h2>
                        <p class="mt-2">
                            ¡Apoya a la comunidad compartiendo tus canciones! ¿Tienes alguna duda? Escríbela en el foro.  
                            ¿Conoces la respuesta? ¡Anímate a ayudar!  
                        </p>

                        <br>

                        <a href="register" class="bg-blue-500 hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <i class="fa-solid fa-address-card"></i> Regístrate
                        </a>
                        <a href="login" class="bg-blue-500 hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <i class="fa-solid fa-circle-user"></i> Inicia Sesión
                        </a>
                    </div>
                    
                    <hr><br>

                    <div class="grid grid-cols-2 gap-6 text-gray-900 dark:text-gray-100">
                        <!-- Columna izquierda -->
                        <div>
                            <img src="{{ asset('images/logoBlanco.png') }}" alt="Logo" class="mx-auto logo" style="max-width: 45%;">
                        </div>

                        <!-- Columna derecha -->
                        <div>
                            <h2 class="text-xl"><strong>mInstrumental</strong></h2>
                            <br>
                            <p>
                                mInstrumental es una página web hecha para músicos, aquí podrás tener los acordes de tus artistas, géneros o canciones favoritas.
                                También cuenta con un apartado para poder aprender a tocar guitarra, piano, violín, entre otros instrumentos!
                                Cuenta con la opción de una librería de acordes, y también poder escribir tú las canciones con los acordes de otros artistas y poder publicarlo,
                                guarda tus canciones favoritas, y cualquier duda que tengas puedes ir al foro, y cualquier otro usuario podrá resolverla.
                                Navega por la página web y descubre todas sus funciones.
                            </p>
                        </div>
                    </div>

                    <h2 style="text-align: center;" class="text-gray-900 dark:text-gray-100 mt-6 mb-2 text-xl">RECURSOS</h2>

                    <div class="flex flex-wrap justify-center gap-6 p-6 columna-vertical">
                        <div class="w-full sm:w-1/2 lg:w-1/3">
                            <a href="afinar_instrumento" class="block">
                                <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                    <img src="{{ asset('images/AfinarInstrumento.jpg') }}" alt="Imagen Guitarra" class="w-full h-48 object-cover">
                                    <div class="p-4 text-center">
                                        <h2 class="text-xl font-bold mb-2">Afinar un instrumento</h2>
                                        <p class="text-gray-600">Antes de tocar cualquier canción, lo mejor será afinar un poco.</p>
                                    </div>
                                </section>
                            </a>
                        </div>
                                
                        <div class="w-full sm:w-1/2 lg:w-1/3">
                            <a href="libreria_acordes" class="block">
                                <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                    <img src="{{ asset('images/LibreriaDeAcordes.jpg') }}" alt="Imagen Piano" class="w-full h-48 object-cover">
                                    <div class="p-4 text-center">
                                        <h2 class="text-xl font-bold mb-2">Librería de Acordes</h2>
                                        <p class="text-gray-600">Aquí encontrarás variedad de acordes, teoría musical y curiosidades sobre instrumentos.</p>
                                    </div>
                                </section>
                            </a>
                        </div>
                                
                        <div class="w-full sm:w-1/2 lg:w-1/3">
                            <a href="foro" class="block">
                                <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                    <img src="{{ asset('images/InstrumentosMusicales.jpg') }}" alt="Imagen Violín" class="w-full h-48 object-cover">
                                    <div class="p-4 text-center">
                                        <h2 class="text-xl font-bold mb-2">Foro de mInstrumental</h2>
                                        <p class="text-gray-600">¿Tienes alguna duda? Entra en el foro, pregunta o responde.</p>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
