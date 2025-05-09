<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fas fa-tachometer-alt"></i> {{ __('Dashboard') }}
        </h2>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Bienvenida -->
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold">
                        <i class="fa-solid fa-hand"></i> Bienvenido, <strong>{{ auth()->user()->nom_usuari }} {{ auth()->user()->cognom_usuari }}</strong>
                    </h2>
                    <p class="mt-2">Administra y controla los aspectos clave de la plataforma.</p>

                    <br>

                    <a href="manage_usuarios" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        <i class="fas fa-users"></i> Usuarios
                    </a>
                    <a href="manage_artistas" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        <i class="fas fa-music"></i> Artistas
                    </a>
                    <a href="manage_generos" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        <i class="fas fa-tags"></i> Géneros
                    </a>
                    <a href="manage_canciones" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        <i class="fas fa-compact-disc"></i> Canciones
                    </a>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
