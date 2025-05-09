<x-app-noUser>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <i class="fa-solid fa-book"></i> {{ __('Librería de Acordes') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
        <style>
            @media (max-width: 1024px) {
                .grid-cols-2 {
                    grid-template-columns: 1fr;
                    text-align: center;
                }

                .columna-vertical {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 1.5rem;
                    padding: 1.5rem;
                }
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-2 gap-6 text-gray-900 dark:text-gray-100 mb-6">
                    <!-- Columna izquierda -->
                    <div>
                        <img src="{{ asset('images/logoBlanco.png') }}" alt="Logo" class="mx-auto" style="max-width: 45%;">
                    </div>

                    <!-- Columna derecha -->
                    <div>
                        <h2 class="text-xl"><strong>La librería de acordes</strong></h2>
                        <br>
                        <p>
                            En esta página podrás acceder a una completa <b>librería de acordes</b>, acompañada de teoría musical y curiosidades sobre los instrumentos.
                            Aunque nuestra especialidad es la guitarra, sabemos que la música une a todos los instrumentos. Aquí podrás encontrar teoría, acordes y lecciones para otros instrumentos como: 
                            Guitarra, Piano, Violín, Batería, Flauta travesera, Ukelele

                            <br><br>

                            <h4><strong>¿Cuál es tu instrumento ideal?</strong></h4>
                            Navega por nuestra página y descubre el instrumento que más te inspire. Cada uno tiene su propio encanto, y estamos aquí para ayudarte a explorar todo lo que puedes aprender con ellos.
                        </p>
                    </div>
                </div>

                <h2 style="text-align:center;" class="text-gray-900 dark:text-gray-100 mb-2 text-xl">INSTRUMENTOS</h2>
                
                <div class="flex flex-wrap justify-center gap-6 p-6 columna-vertical">
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <a href="#" class="block">
                            <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                <img src="{{ asset('images/guitarra.jpg') }}" alt="Imagen Guitarra" class="w-full h-48 object-cover">
                                <div class="p-4 text-center">
                                    <h2 class="text-xl font-bold mb-2">Guitarra</h2>
                                    <p class="text-gray-600">Aprende más acerca de la guitarra, acordes, teoría musical, curiosidades...</p>
                                </div>
                            </section>
                        </a>
                    </div>
                    
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <a href="#" class="block">
                            <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                <img src="{{ asset('images/piano.jpg') }}" alt="Imagen Piano" class="w-full h-48 object-cover">
                                <div class="p-4 text-center">
                                    <h2 class="text-xl font-bold mb-2">Piano</h2>
                                    <p class="text-gray-600">Aprende acerca del "rey" de los instrumentos, el piano.</p>
                                </div>
                            </section>
                        </a>
                    </div>
                    
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <a href="#" class="block">
                            <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                <img src="{{ asset('images/violin.jpg') }}" alt="Imagen Violín" class="w-full h-48 object-cover">
                                <div class="p-4 text-center">
                                    <h2 class="text-xl font-bold mb-2">Violín</h2>
                                    <p class="text-gray-600">Aprende acerca del violín, uno de los instrumentos más nostálgicos.</p>
                                </div>
                            </section>
                        </a>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-6 p-6 columna-vertical">
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <a href="#" class="block">
                            <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                <img src="{{ asset('images/bateria.jpg') }}" alt="Imagen Guitarra" class="w-full h-48 object-cover">
                                <div class="p-4 text-center">
                                    <h2 class="text-xl font-bold mb-2">Batería</h2>
                                    <p class="text-gray-600">¿Y si aprendemos un poco de percusión con la batería?</p>
                                </div>
                            </section>
                        </a>
                    </div>
                    
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <a href="#" class="block">
                            <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                <img src="{{ asset('images/flauta_travesera.jpg') }}" alt="Imagen Piano" class="w-full h-48 object-cover">
                                <div class="p-4 text-center">
                                    <h2 class="text-xl font-bold mb-2">Flauta travesera</h2>
                                    <p class="text-gray-600">Aprendamos acerca de este instrumento de viento.</p>
                                </div>
                            </section>
                        </a>
                    </div>
                    
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <a href="#" class="block">
                            <section class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                                <img src="{{ asset('images/ukelele.jpg') }}" alt="Imagen Violín" class="w-full h-48 object-cover">
                                <div class="p-4 text-center">
                                    <h2 class="text-xl font-bold mb-2">Ukelele</h2>
                                    <p class="text-gray-600">Lo consideran el hermano pequeño de la guitarra.</p>
                                </div>
                            </section>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-noUser>
