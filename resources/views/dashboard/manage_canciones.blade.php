<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-compact-disc"></i> {{ __('Canciones') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">

        <!-- Agregar Select2 CSS, jQuery y Select2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        
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
                            <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Nombre de la canción" />
                            <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Ver canción</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre de la canción</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Nombre del artista</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Género</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase">Colaborador</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Editar</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800">
                                @foreach ($canciones as $cancion)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                        <td class="px-6 py-4"><a style="cursor: pointer;"
                                            onclick="window.location='{{ url(strtolower(str_replace(' ', '_', 'canciones/' . str_replace(' ', '_', $cancion->artista->nom_artista) . '/' . str_replace(' ', '_', $cancion->nom_canco)))) }}'">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        </td>
                                        <td class="px-6 py-4">{{ $cancion->nom_canco }}</td>
                                        <td class="px-6 py-4">{{ $cancion->artista->nom_artista }}</td>
                                        <td class="px-6 py-4">{{ $cancion->genere->nom_genere }}</td>
                                        <td class="px-6 py-4">{{ $cancion->usuari->username }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-blue-600 hover:text-blue-900" onclick="openModal('modalEdit{{ $cancion->id_canco }}')">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="openModal('modalDelete{{ $cancion->id_canco }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
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

    <!-- Modal de edición -->
    @foreach ($canciones as $cancion)
        <div id="modalEdit{{ $cancion->id_canco }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="modal-overlay absolute inset-0"></div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Editar Canción</h2>
                    <form action="{{ route('canciones.update', $cancion->id_canco) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nom_canco" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre de la canción</label>
                            <input type="text" name="nom_canco" id="nom_canco" value="{{ $cancion->nom_canco }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="link_spotify" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link a Spotify</label>
                            <input type="text" name="link_spotify" id="link_spotify" value="{{ $cancion->link_spotify }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="link_youtube" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link a YouTube</label>
                            <input type="text" name="link_youtube" id="link_youtube" value="{{ $cancion->link_youtube }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="link_apple" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link a Apple</label>
                            <input type="text" name="link_apple" id="link_apple" value="{{ $cancion->link_apple }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="link_amazon" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link a Amazon</label>
                            <input type="text" name="link_amazon" id="link_amazon" value="{{ $cancion->link_amazon }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mt-6 flex justify-between">
                            <button type="submit" style="background-color: blue; margin-right: 10px;" class="hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Guardar Cambios</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalEdit{{ $cancion->id_canco }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal de confirmación para eliminar -->
    @foreach ($canciones as $cancion)
        <div id="modalDelete{{ $cancion->id_canco }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="modal-overlay absolute inset-0"></div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-red-600 dark:text-red-500 mb-4">¿Seguro que quieres eliminar la canción {{ $cancion->nom_canco }} de {{ $cancion->usuari->username }}?</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Esta acción no se puede deshacer.</p>
                    <form action="{{ route('canciones.destroy', $cancion->id_canco) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="flex justify-between">
                            <button type="submit" style="background-color: red;"class="hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalDelete{{ $cancion->id_canco }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

</script>