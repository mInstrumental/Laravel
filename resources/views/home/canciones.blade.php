@auth
<x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fas fa-compact-disc"></i> {{ __('Canciones') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <style>
                .form-container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    width: 100%;
                    margin-bottom: 1rem;
                    gap: 1rem;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                div .form-left,
                div .form-right {
                    text-align: center;
                }

                .form-right {
                    text-align: right;
                }

                @media (min-width: 641px) {
                    .form-container {
                        flex-direction: row;
                        justify-content: space-between;
                    }

                    .form-left,
                    .form-right {
                        width: auto;
                        max-width: none;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form method="GET" class="form-container" style="color: black">
                            <div class="form-left">
                                <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Nombre de la canción" />
                                <button type="submit" class="bg-gray-500 p-2 px-3 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>

                            <div class="form-right">
                                <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                    <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Canciones A-Z</option>
                                    <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Canciones Z-A</option>
                                </select>
                            </div>
                        </form>

                        <div class="mb-4 flex justify-center">
                            <button type="button" onclick="location.href='/escribir_cancion'" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md">
                                <i class="fas fa-plus mr-2"></i> Añadir canción
                            </button>
                        </div>

                        <!-- Título "Canciones" -->
                        <h2 class="text-lg font-semibold text-center mb-4">Canciones</h2>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Imagen del artista</th>
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
                                            <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                                <img src="{{ $cancion->artista->imatge_artista }}" alt="Imatge Artista"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                            </td>
                                            <td class="px-6 py-4">{{ $cancion->nom_canco }}</td>
                                            <td class="px-6 py-4">{{ $cancion->artista->nom_artista }}</td>
                                            <td class="px-6 py-4">{{ $cancion->genere->nom_genere }}</td>
                                            <td class="px-6 py-4">{{ $cancion->usuari->username }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 justify-center">
                                {{ $canciones->links() }}
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
                <i class="fas fa-compact-disc"></i> {{ __('Canciones') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <style>
                .form-container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    width: 100%;
                    margin-bottom: 1rem;
                    gap: 1rem;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                div .form-left,
                div .form-right {
                    text-align: center;
                }

                .form-right {
                    text-align: right;
                }

                @media (min-width: 641px) {
                    .form-container {
                        flex-direction: row;
                        justify-content: space-between;
                    }

                    .form-left,
                    .form-right {
                        width: auto;
                        max-width: none;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form method="GET" class="form-container" style="color: black">
                            <div class="form-left">
                                <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Nombre de la canción" />
                                <button type="submit" class="bg-gray-500 p-2 px-3 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>

                            <div class="form-right">
                                <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                    <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Canciones A-Z</option>
                                    <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Canciones Z-A</option>
                                </select>
                            </div>
                        </form>

                        <!-- Título "Canciones" -->
                        <h2 class="text-lg font-semibold text-center mb-4">Canciones</h2>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Imagen del artista</th>
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
                                            <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                                <img src="{{ $cancion->artista->imatge_artista }}" alt="Imatge Artista"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                            </td>
                                            <td class="px-6 py-4">{{ $cancion->nom_canco }}</td>
                                            <td class="px-6 py-4">{{ $cancion->artista->nom_artista }}</td>
                                            <td class="px-6 py-4">{{ $cancion->genere->nom_genere }}</td>
                                            <td class="px-6 py-4">{{ $cancion->usuari->username }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 justify-center">
                                {{ $canciones->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-noUser>
@endauth

