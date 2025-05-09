@auth
<x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-feather"></i> {{ __('Escribir una canción') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <!-- Agregar Select2 CSS, jQuery y Select2 -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

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

                @media (max-width: 1024px) {
                    .grid-cols-2 {
                        grid-template-columns: 1fr !important;
                        text-align: left;
                    }

                    .columna-vertical {
                        display: flex;
                        text-align: center;
                        flex-direction: column;
                        gap: 1.5rem;
                        padding: 1.5rem;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Título "Escribir una canción" -->
                        <h2 class="text-lg font-semibold text-center mb-4"><i class="fa-solid fa-feather"></i> Escribir una canción</h2>

                        <br>
                        <hr>
                        <br>

                        <!-- Letra de la canción -->
                        <div class="grid grid-cols-2 h-screen mx-auto">
                            <div class="justify-center text-left h-32 bg-gray-200 columna-vertical" style="margin-right: 10px;">
                                <form id="form-canco" action="{{ route('canciones.write') }}" method="POST">
                                @csrf
                                    <div class="mb-4">
                                        <label for="id_artista" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Selecciona un artista:</label>
                                        <select name="id_artista" id="id_artista" class="text-white mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md">
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista->id_artista }}">
                                                    {{ $artista->nom_artista }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="id_genere" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Selecciona un género:</label>
                                        <select name="id_genere" id="id_genere" class="text-white mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md">
                                            @foreach ($generes as $genere)
                                                <option value="{{ $genere->id_genere }}">
                                                    {{ $genere->nom_genere }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <p>¿No está el artista o género que buscas? ¡Ponlo en el título! El Administrador se encargará de añadirlo <i class="fa-solid fa-face-smile-wink"></i></p>
                                </div>

                                <div class="flex flex-col text-left h-32 bg-gray-200">
                                    <div class="mb-4">
                                        <label for="nom_canco" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título de la canción</label>
                                        <input type="text" name="nom_canco" id="nom_canco" class="mt-1 block w-full p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                    <label for="lletra_canco" class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Escribe la letra de la canción:
                                    </label>
                                    <textarea id="lletra" name="lletra_canco" class="w-full p-2 font-mono text-sm text-gray-900 dark:text-gray-100 dark:bg-gray-900 resize-none" rows="6">{{ old('lletra_canco') }}</textarea>
                                    <div class="mt-6 flex justify-between">
                                        <button type="submit" class="bg-gray-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Publicar canción</button>
                                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" onclick="location.href='/canciones'">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </x-app-user>
    <script>
        $(document).ready(function() {
            // Inicialitzem el select2
            $('#id_artista').select2({
                placeholder: 'Selecciona un artista',  // Text pel placeholder
                allowClear: true,  // Opció per netejar la selecció
                width: '100%',  // Té que ocupar tot l'espai disponible
                theme: 'classic'  // Apliqueem un tema clasic per mantindre l'estil
            }).on('select2:open', function() {
                // Aplica las clases de Tailwind al dropdown de Select2
                $('.select2-dropdown').addClass('p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600');
            });

            $('#id_genere').select2({
                placeholder: 'Selecciona un género', 
                allowClear: true, 
                width: '100%',
                theme: 'classic'
            }).on('select2:open', function() {
                $('.select2-dropdown').addClass('p-2 border border-gray-300 dark:bg-gray-700 dark:border-gray-600');
            });
        });


        document.getElementById('form-canco').addEventListener('submit', function (e) {
            const textarea = document.getElementById('lletra');
            
            // Asegura que los espacios no se tocan:
            textarea.value = textarea.value
                .split('\n')
                .map(line => line.replace(/\s+$/, '')) // quita solo espacios finales si los hubiera (opcional)
                .join('\n');

            // O simplemente no hagas nada aquí si no quieres alterar nada.
        });
    </script>
@endauth