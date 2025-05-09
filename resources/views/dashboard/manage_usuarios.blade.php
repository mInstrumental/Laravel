<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-users"></i> {{ __('Usuarios') }}
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
                            <input type="text" name="busqueda" id="busqueda" value="{{ $busqueda }}" class="border rounded p-2" placeholder="Buscar username" />
                            <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                        <div class="form-right">
                            <select name="orden" id="orden" onchange="this.form.submit()" class="border rounded p-1">
                                <option value="az" {{ $orden == 'az' ? 'selected' : '' }}>Ordenar Usuarios A-Z</option>
                                <option value="za" {{ $orden == 'za' ? 'selected' : '' }}>Ordenar Usuarios Z-A</option>
                            </select>
                        </div>
                    </form>

                    <h2 class="text-lg font-semibold text-center">Usuarios Registrados</h2>
                    <br>
                    <!-- Contenedor con desplazamiento horizontal -->
                    <div class="table-responsive">
                        <table class="min-w-full text-center mx-auto">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">ID</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Username</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Email</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Nombre</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Teléfono</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Rol</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Editar</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider border-b-0">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($usuarios as $usuario)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->id_usuari }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->username }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->nom_usuari }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->numero_tlf ?? '-' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($usuario->id_rol == 1)
                                                Admin
                                            @elseif ($usuario->id_rol == 2)
                                                User
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <!-- Botones de Editar y Eliminar -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-blue-600 hover:text-blue-900" onclick="openModal('modalEdit{{ $usuario->id_usuari }}')">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-red-600 hover:text-red-900 ml-4" onclick="openModal('modalDelete{{ $usuario->id_usuari }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 justify-center">
                        {{ $usuarios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Edición -->
    @foreach ($usuarios as $usuario)
        <div id="modalEdit{{ $usuario->id_usuari }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="modal-overlay absolute inset-0"></div>

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Editar Usuario</h2>
                    <form action="{{ route('usuarios.update', $usuario->id_usuari) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Username</label>
                            <input type="text" name="username" id="username" value="{{ $usuario->username }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" value="{{ $usuario->email }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="nom_usuari" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                            <input type="text" name="nom_usuari" id="nom_usuari" value="{{ $usuario->nom_usuari }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="cognom_usuari" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellido</label>
                            <input type="text" name="cognom_usuari" id="cognom_usuari" value="{{ $usuario->cognom_usuari }}" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="id_rol" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rol</label>
                            <select name="id_rol" id="id_rol" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-100 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                <option value="1" {{ $usuario->id_rol == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $usuario->id_rol == 2 ? 'selected' : '' }}>User</option>
                            </select>
                        </div>
                        <div class="mt-6 flex justify-between">
                            <button type="submit" style="margin-right: 10px; background-color: blue;" class="hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Guardar cambios</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalEdit{{ $usuario->id_usuari }}')">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal de Confirmación para Eliminar -->
    @foreach ($usuarios as $usuario)
        <div id="modalDelete{{ $usuario->id_usuari }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center h-full w-full hidden z-50">
            <div class="modal-overlay absolute inset-0"></div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-1/2 mx-auto">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-red-600 dark:text-red-500 mb-4">¿Seguro que quieres eliminar a {{ $usuario->username }}?</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Esta acción no se puede deshacer.</p>
                    <form action="{{ route('usuarios.destroy', $usuario->id_usuari) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="flex justify-between">
                            <button type="submit" style="background-color: red;" class="hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
                            <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="closeModal('modalDelete{{ $usuario->id_usuari }}')">Cancelar</button>
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

