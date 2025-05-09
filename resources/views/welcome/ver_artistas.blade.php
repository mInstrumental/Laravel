<x-app-noUser>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-music"></i> {{ __('Artistas / Grupos') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

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
                                    <tr>
                                        <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                            <img src="{{ $artista->imatge_artista }}" alt="Imatge Artista"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                        </td>
                                        <td class="px-6 py-4">{{ $artista->nom_artista }}</td>
                                        <td class="px-6 py-4">{{ $artista->n_cancons }}</td>
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
