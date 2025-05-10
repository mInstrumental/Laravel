@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fas fa-tags"></i> {{ __('Géneros') }}
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
                                <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Nombre del género" />
                                <button type="submit" class="bg-gray-500 p-2 px-3 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>

                            <div class="form-right">
                                <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                    <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Género A-Z</option>
                                    <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Género Z-A</option>
                                    <option value="mas" {{ $orden == 'mas' ? 'selected' : '' }}>Género con más canciones</option>
                                </select>
                            </div>
                        </form>

                        <!-- Título "Géneros" -->
                        <h2 class="text-lg font-semibold text-center mb-4">Géneros</h2>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Imagen del género</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nombre del género</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nº Canciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($generos as $genero)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'generos/' . $genero->nom_genere))) }}'">
                                            <td class="px-6 py-4 whitespace-nowrap" style="text-align: center; vertical-align: middle;">
                                                <img src="{{ $genero->imatge_genere }}" alt="Imatge Genere"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $genero->nom_genere }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $genero->n_cancons }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 justify-center">
                                {{ $generos->links() }}
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
                <i class="fas fa-tags"></i> {{ __('Géneros') }}
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
                    .responsive-img {
                        width: 40px;
                        height: 40px;
                    }

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
                                <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Nombre del género" />
                                <button type="submit" class="bg-gray-500 p-2 px-3 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>

                            <div class="form-right">
                                <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                    <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Género A-Z</option>
                                    <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Género Z-A</option>
                                    <option value="mas" {{ $orden == 'mas' ? 'selected' : '' }}>Género con más canciones</option>
                                </select>
                            </div>
                        </form>

                        <!-- Título "Géneros" -->
                        <h2 class="text-lg font-semibold text-center mb-4">Géneros</h2>

                        <!-- Tabla -->
                        <div class="table-responsive">
                            <table class="min-w-full text-center mx-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Imagen del género</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nombre del género</th>
                                        <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nº Canciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($generos as $genero)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'generos/' . $genero->nom_genere))) }}'">
                                            <td class="px-6 py-4 whitespace-nowrap" style="text-align: center; vertical-align: middle;">
                                                <img src="{{ $genero->imatge_genere }}" alt="Imatge Genere"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $genero->nom_genere }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $genero->n_cancons }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 justify-center">
                                {{ $generos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-noUser>
@endauth