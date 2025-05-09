@auth
<x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __($cancion->artista->nom_artista . ' - ' . $cancion->nom_canco) }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <style>
                .responsive-img {
                    width: 60px;
                    height: 60px;
                    object-fit: cover;
                    border-radius: 50%;
                    display: inline-block;
                }

                div pre {
                    overflow-x: auto;
                }

                @media (max-width: 640px) {
                    .responsive-img {
                        width: 40px;
                        height: 40px;
                    }
                }

                @media (max-width: 1024px) {
                    .grid-cols-2 {
                        grid-template-columns: 1fr !important;
                        text-align: left;
                    }

                    .columna-vertical {
                        display: flex;
                        text-align: center;
                        flex-direction: column;
                        gap: 1.5rem;
                        padding: 1.5rem;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Título "Música  " -->
                        <div class="flex justify-center">
                            <div class="text-center">
                                <img src="{{ $cancion->artista->imatge_artista }}"
                                    alt="Imatge Artista"
                                    class="w-20 h-20 rounded-full object-cover mx-auto">
                                    
                                <br>

                                <h2 class="text-lg font-semibold text-center mb-4">
                                    {{ $cancion->artista->nom_artista }} - {{ $cancion->nom_canco }}
                                </h2>

                                <div class="flex justify-center">
                                    <button 
                                        id="botoFavorit" onclick="toggleFavorit({{ auth()->id() }}, {{ $cancion->id_canco }})"
                                        class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        <i class="fa-solid fa-heart"></i> Añadir a Favoritos
                                    </button>
                                </div>

                                <p style="font-size: 12px;">
                                    Colaborador/a: {{ $cancion->usuari->username }}
                                </p>

                                @if(auth()->user()->id_usuari === $cancion->id_usuari || auth()->user()->id_rol == 1)
                                    <a href="{{ route('editCancion', [
                                        'nombre_artista' => str_replace(' ', '_', strtolower($cancion->artista->nom_artista)),
                                        'nombre_cancion' => str_replace(' ', '_', strtolower($cancion->nom_canco))
                                    ]) }}"
                                    class="inline-flex items-center gap-2 mt-4 px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md text-sm font-semibold">
                                        <i class="fa-regular fa-pen-to-square"></i> Editar Canción
                                    </a>
                                @endif
                            </div>
                        </div>

                        <br>
                        <hr>
                        <br>

                        <!-- Letra de la canción -->
                        <div class="grid grid-cols-2 h-screen mx-auto">
                            <div class="justify-center text-left h-32 bg-gray-200 columna-vertical">

                                <a target="_blank" href="{{ $cancion->link_spotify }}" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-spotify"></i> Escuchar en Spotify
                                </a>
                                <a target="_blank" href="{{ $cancion->link_youtube }}" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-youtube"></i> Escuchar en YouTube
                                </a>
                                <a target="_blank" href="{{ $cancion->link_apple }}" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-apple"></i> Escuchar en Apple Music
                                </a>
                                <a target="_blank" href="{{ $cancion->link_amazon }}" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-amazon"></i> Escuchar en Amazon Music
                                </a>
                            </div>
                            <div class="flex justify-center text-left h-32 bg-gray-200">
                                <pre class="whitespace-pre font-mono text-left text-sm text-gray-800 dark:text-gray-100">{{ $cancion->lletra_canco }}</pre>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleFavorit(idUsuari, idCanco) {
                fetch("{{ route('favorits.toggle') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        id_usuari: idUsuari,
                        id_canco: idCanco
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const boton = document.getElementById('botoFavorit');
                    if (data.status == 'added') {
                        alert('Canción añadida a favoritos');
                        boton.innerHTML = '<i class="fa-solid fa-heart"></i> Eliminar de favoritos';
                    } else if (data.status == 'removed') {
                        alert('Canción eliminada de favoritos');
                        boton.innerHTML = '<i class="fa-solid fa-heart"></i> Añadir a favoritos';
                    }
                });
            }
        </script>
    </x-app-user>
@else
<x-app-noUser>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __($cancion->artista->nom_artista . ' - ' . $cancion->nom_canco) }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <style>
                .responsive-img {
                    width: 60px;
                    height: 60px;
                    object-fit: cover;
                    border-radius: 50%;
                    display: inline-block;
                }

                div pre {
                    overflow-x: auto;
                }

                @media (max-width: 640px) {
                    .responsive-img {
                        width: 40px;
                        height: 40px;
                    }
                }

                @media (max-width: 1024px) {
                    .grid-cols-2 {
                        grid-template-columns: 1fr !important;
                        text-align: left;
                    }

                    .columna-vertical {
                        display: flex;
                        text-align: center;
                        flex-direction: column;
                        gap: 1.5rem;
                        padding: 1.5rem;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Título "Música  " -->
                            <div class="flex justify-center">
                                <div class="text-center">
                                    <img src="{{ $cancion->artista->imatge_artista }}"
                                        alt="Imatge Artista"
                                        class="w-20 h-20 rounded-full object-cover mx-auto">
                                    
                                    <br>

                                    <h2 class="text-lg font-semibold text-center mb-4">
                                        {{ $cancion->artista->nom_artista }} - {{ $cancion->nom_canco }}
                                    </h2>

                                    <p style="font-size: 12px;">
                                        Colaborador/a: {{ $cancion->usuari->username }}
                                    </p>
                                </div>
                            </div>

                        <br>
                        <hr>
                        <br>

                        <!-- Letra de la canción -->
                        <div class="grid grid-cols-2 h-screen mx-auto">
                            <div class="justify-center text-left h-32 bg-gray-200 columna-vertical">
                                <a target="_blank" href="libreria_acordes" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-spotify"></i> Escuchar en Spotify
                                </a>
                                <a target="_blank" href="artistas" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-youtube"></i> Escuchar en YouTube
                                </a>
                                <a target="_blank" href="generos" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-apple"></i> Escuchar en Apple Music
                                </a>
                                <a target="_blank" href="generos" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    <i class="fa-brands fa-amazon"></i> Escuchar en Amazon Music
                                </a>
                            </div>
                            <div class="flex justify-center text-left h-32 bg-gray-200">
                                <pre class="whitespace-pre font-mono text-left text-sm text-gray-800 dark:text-gray-100">{{ $cancion->lletra_canco }}</pre>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </x-app-noUser>
@endauth
