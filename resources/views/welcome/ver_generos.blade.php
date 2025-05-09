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
                                    <tr>
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
                </div>
            </div>
        </div>
    </div>
</x-app-noUser>
