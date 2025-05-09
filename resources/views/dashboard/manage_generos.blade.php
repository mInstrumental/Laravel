<x-app-layout>
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

            .modal-overlay {
                background-color: rgba(255, 255, 255, 0.5); /* blanco con opacidad */
                backdrop-filter: blur(2px);
                transition: background-color 0.3s ease;
            }

            .dark .modal-overlay {
                background-color: rgba(0, 0, 0, 0.5); /* negro con opacidad */
            }

            div.bg-white {
                z-index: 10;
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
                            <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                        <div class="form-right">
                            <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Género A-Z</option>
                                <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Género Z-A</option>
                                <option value="mas" {{ $orden == 'mas' ? 'selected' : '' }}>Género con más canciones</option>
                            </select>
                        </div>
                    </form>

                    <!-- Botón para añadir un género -->
                    <div class="mb-4 flex justify-center">
                        <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md flex items-center justify-center" onclick="openModal('modalAdd')">
                            <i class="fas fa-plus mr-2"></i> Añadir género
                        </button>
                    </div>

                    <!-- Título "Géneros Registrados" -->
                    <h2 class="text-lg font-semibold text-center mb-4">Géneros Registrados</h2>

                    <!-- Tabla -->
                    <div class="table-responsive">
                        <table class="min-w-full text-center mx-auto">
                            <thead>
                                <tr>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">ID</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Imagen del género</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nombre del género</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nº Canciones</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Editar</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($generos as $genero)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $genero->id_genere }}</td>
                                        <td class="px-6 py-4" style="text-align: center; vertical-align: middle;">
                                            <img src="{{ $genero->imatge_genere }}" alt="Imatge Genere"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; display: inline-block;">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $genero->nom_genere }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $genero->n_cancons }}</td>
                                        <!-- Botones de Editar y Eliminar -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-blue-600 hover:text-blue-900" onclick="openModal('modalEdit{{ $genero->id_genere }}')">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="openModal('modalDelete{{ $genero->id_genere }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
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

    <!-- Modal de edición -->
    @foreach ($generos as $genere)
        <div id="modalEdit{{ $genere->id_genere }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="modal-overlay absolute inset-0"></div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Editar Género</h2>
                    <form action="{{ route('generos.update', $genere->id_genere) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nom_genere" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del género</label>
                            <input type="text" name="nom_genere" id="nom_genere" value="{{ $genere->nom_genere }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="imatge_genere" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Imagen del género</label>
                            <input type="text" name="imatge_genere" id="imatge_genere" value="{{ $genere->imatge_genere }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mt-6 flex justify-between">
                            <button type="submit" style="background-color: blue; margin-right: 10px;" class="hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Guardar Cambios</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalEdit{{ $genere->id_genere }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal de confirmación para eliminación-->
    @foreach ($generos as $genere)
        <!-- Modal de Confirmación para Eliminar -->
        <div id="modalDelete{{ $genere->id_genere }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="modal-overlay absolute inset-0"></div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto"> <!-- w-1/2 y mx-auto para ancho 50% y centrado -->
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-red-600 dark:text-red-500 mb-4">¿Seguro que quieres eliminar el género {{ $genere->nom_genere }}?</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Esta acción no se puede deshacer.</p>
                    <form action="{{ route('generos.destroy', $genere->id_genere) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="flex justify-between">
                            <button type="submit" style="background-color: red;" class="hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalDelete{{ $genere->id_genere }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal para Añadir Género -->
    <div id="modalAdd" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
        <div class="modal-overlay absolute inset-0"></div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Añadir Género</h2>
                <form action="{{ route('generos.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nom_genere" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del Género</label>
                        <input type="text" name="nom_genere" id="nom_genere" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="imatge_genere" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Imagen del Género</label>
                        <input type="text" name="imatge_genere" id="imatge_genere" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mt-6 flex justify-between">
                        <button type="submit" style="background-color: green;" class="hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Añadir</button>
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