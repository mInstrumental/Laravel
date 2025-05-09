@auth
<x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __($artista->nom_artista) }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Título "Música de: " -->
                        <div class="text-center">
                            <img src="{{ $artista->imatge_artista }}"
                                alt="Imatge Artista"
                                class="w-20 h-20 rounded-full object-cover mx-auto">
                                    
                            <br>

                            <h2 class="text-lg font-semibold text-center mb-4">
                                {{ $artista->nom_artista }}
                            </h2>

                            <h2 class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">
                                {{ 'Nº de Canciones publicadas: ' . $artista->n_cancons }}
                            </h2>
                        </div>

                        <br>
                        <hr>
                        <br>
                        
                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre de la canción</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre del artista</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Género</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Colaborador</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    @foreach ($canciones as $cancion)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer" style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'canciones/' . str_replace(' ', '_', $cancion->artista->nom_artista) . '/' . str_replace(' ', '_', $cancion->nom_canco)))) }}'">
                                            <td class="px-6 py-4">{{ $cancion->nom_canco }}</td>
                                            <td class="px-6 py-4">{{ $cancion->artista->nom_artista }}</td>
                                            <td class="px-6 py-4">{{ $cancion->genere->nom_genere }}</td>
                                            <td class="px-6 py-4">{{ $cancion->usuari->username }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                {{ __($artista->nom_artista) }}
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

                @media (max-width: 640px) {
                    .responsive-img {
                        width: 40px;
                        height: 40px;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="text-center">
                            <img src="{{ $artista->imatge_artista }}"
                                alt="Imatge Artista"
                                class="w-20 h-20 rounded-full object-cover mx-auto">
                                    
                            <br>

                            <h2 class="text-lg font-semibold text-center mb-4">
                                {{ $artista->nom_artista }}
                            </h2>

                            <h2 class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">
                                {{ 'Nº de Canciones publicadas: ' . $artista->n_cancons }}
                            </h2>
                        </div>

                        <br>
                        <hr>
                        <br>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre de la canción</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre del artista</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Género</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Colaborador</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    @foreach ($canciones as $cancion)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer" style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'canciones/' . str_replace(' ', '_', $cancion->artista->nom_artista) . '/' . str_replace(' ', '_', $cancion->nom_canco)))) }}'">
                                            <td class="px-6 py-4">{{ $cancion->nom_canco }}</td>
                                            <td class="px-6 py-4">{{ $cancion->artista->nom_artista }}</td>
                                            <td class="px-6 py-4">{{ $cancion->genere->nom_genere }}</td>
                                            <td class="px-6 py-4">{{ $cancion->usuari->username }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-noUser>
@endauth

