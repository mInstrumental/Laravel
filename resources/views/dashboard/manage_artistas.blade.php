<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-music"></i> {{ __('Artistas') }}
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
                            <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                        <div class="form-right">
                            <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Nombre A-Z</option>
                                <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Nombre Z-A</option>
                                <option value="mas" {{ $orden == 'mas' ? 'selected' : '' }}>Artista con más canciones</option>
                            </select>
                        </div>
                    </form>

                    <!-- Botón para añadir artista -->
                    <div class="mb-4 flex justify-center">
                        <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md" onclick="openModal('modalAdd')">
                            <i class="fas fa-plus mr-2"></i> Añadir artista
                        </button>
                    </div>

                    <!-- Título "Artistas Registrados" -->
                    <h2 class="text-lg font-semibold text-center mb-4">Artistas / Grupos Registrados</h2>

                    <!-- Tabla -->
                    <div class="table-responsive">
                        <table class="min-w-full text-center mx-auto">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">ID</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Imagen del artista</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre del artista</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nº Canciones</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Editar</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800">
                                @foreach ($artistas as $artista)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                        <td class="px-6 py-4">{{ $artista->id_artista }}</td>
                                        <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                            <img src="{{ $artista->imatge_artista }}" alt="Imatge Artista"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                        </td>
                                        <td class="px-6 py-4">{{ $artista->nom_artista }}</td>
                                        <td class="px-6 py-4">{{ $artista->n_cancons }}</td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-600 hover:text-blue-900" onclick="openModal('modalEdit{{ $artista->id_artista }}')">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="openModal('modalDelete{{ $artista->id_artista }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
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

    <!-- Modal de edición -->
    @foreach ($artistas as $artista)
        <div id="modalEdit{{ $artista->id_artista }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Editar Artista</h2>
                    <form action="{{ route('artistas.update', $artista->id_artista) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nom_artista" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del artista</label>
                            <input type="text" name="nom_artista" id="nom_artista" value="{{ $artista->nom_artista }}" class="text-white mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="imatge_artista" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Imagen del artista</label>
                            <input type="text" name="imatge_artista" id="imatge_artista" value="{{ $artista->imatge_artista }}" class="text-white mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mt-6 flex justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Guardar Cambios</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalEdit{{ $artista->id_artista }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal de confirmación para eliminar -->
    @foreach ($artistas as $artista)
        <div id="modalDelete{{ $artista->id_artista }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-red-600 dark:text-red-500 mb-4">¿Seguro que quieres eliminar el artista {{ $artista->nom_artista }}?</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Esta acción no se puede deshacer.</p>
                    <form action="{{ route('artistas.destroy', $artista->id_artista) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="flex justify-between">
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalDelete{{ $artista->id_artista }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal para Añadir Artista -->
    <div id="modalAdd" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Añadir Artista</h2>
                <form action="{{ route('artistas.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nom_artista" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del Artista</label>
                        <input type="text" name="nom_artista" id="nom_artista" class="text-white mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="imatge_artista" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Imagen del Artista</label>
                        <input type="text" name="imatge_artista" id="imatge_artista" class="text-white mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mt-6 flex justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Añadir</button>
                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalAdd')">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }
</script>