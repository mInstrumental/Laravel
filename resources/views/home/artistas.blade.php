@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fas fa-music"></i> {{ __('Artistas / Grupos') }}
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
                                <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Nombre del artista" />
                                <button type="submit" class="bg-gray-500 p-2 px-3 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>

                            <div class="form-right">
                                <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                    <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Nombre A-Z</option>
                                    <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Nombre Z-A</option>
                                    <option value="mas" {{ $orden == 'mas' ? 'selected' : '' }}>Artista con más canciones</option>
                                </select>
                            </div>
                        </form>

                        <!-- Título "Artistas / Grupos" -->
                        <h2 class="text-lg font-semibold text-center mb-4">Artistas / Grupos</h2>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Imagen del artista</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre del artista</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nº Canciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    @foreach ($artistas as $artista)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'artistas/' . $artista->nom_artista))) }}'">
                                            <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                                <img src="{{ $artista->imatge_artista }}" alt="Imatge Artista"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $artista->nom_artista }}
                                            </td>
                                            <td class="px-6 py-4">{{ $artista->n_cancons }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 justify-center">
                                {{ $artistas->links() }}
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
                <i class="fas fa-music"></i> {{ __('Artistas / Grupos') }}
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
                                <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded" placeholder="Nombre del artista" />
                                <button type="submit" class="bg-gray-500 p-2 px-3 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>

                            <div class="form-right">
                                <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                    <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Nombre A-Z</option>
                                    <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Nombre Z-A</option>
                                    <option value="mas" {{ $orden == 'mas' ? 'selected' : '' }}>Artista con más canciones</option>
                                </select>
                            </div>
                        </form>

                        <!-- Título "Artistas" -->
                        <h2 class="text-lg font-semibold text-center mb-4">Artistas / Grupos</h2>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Imagen del artista</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre del artista</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nº Canciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    @foreach ($artistas as $artista)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'artistas/' . $artista->nom_artista))) }}'">
                                            <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                                <img src="{{ $artista->imatge_artista }}" alt="Imatge Artista"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $artista->nom_artista }}
                                            </td>
                                            <td class="px-6 py-4">{{ $artista->n_cancons }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 justify-center">
                                {{ $artistas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-noUser>
@endauth
