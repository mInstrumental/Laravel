@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Piano') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/info.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <section>
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje del Piano</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia del Piano</h3>
                            <p>El piano, uno de los instrumentos más populares y versátiles, fue inventado en 1700 por Bartolomeo Cristofori en Italia. Desde su invención, ha evolucionado significativamente, con el diseño moderno introducido en el siglo XIX. Hoy en día, el piano se usa en una variedad de géneros musicales, desde música clásica hasta jazz y pop.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Conocer las partes del piano (teclas blancas y negras, pedal, etc.).</li>
                                    <img src="{{ asset('images/piano/partes.avif') }}" alt="imagen de Yamaha">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Yamaha</figcaption>
                                    <li>Aprender a leer partituras en clave de sol y fa.</li>
                                    <img src="{{ asset('images/piano/partituras.jpg') }}" alt="imagen de Daniel Gregorio">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Daniel Gregorio</figcaption>
                                    <li>Notas del piano: <strong>C</strong> (Do), <strong>D</strong> (Re), <strong>E</strong> (Mi), <strong>F</strong> (Fa), <strong>G</strong> (Sol), <strong>A</strong> (La), <strong>B</strong> (Si).</li>
                                    <li>Primeros acordes mayores: C, F, G, A.</li>
                                    <li>Ejercicios básicos de digitación para manos derecha e izquierda.</li>
                                    <img src="{{ asset('images/piano/acordes.png') }}" alt="imagen de Marcolara.net">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Marcolara.net</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Escalas mayores y menores.</li>
                                    <img src="{{ asset('images/piano/escalas.jpg') }}" alt="imagen de APRENDE PIANO Online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de APRENDE PIANO Online</figcaption>
                                    <li>Acordes menores y séptimos (Am, Dm, E7, etc.).</li>
                                    <img src="{{ asset('images/piano/acordes2.jpg') }}" alt="imagen de alabanzaicc.wordpress.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de alabanzaicc.wordpress.com</figcaption>
                                    <li>Lectura fluida de partituras en clave de sol y fa.</li>
                                    <li>Improvisación básica usando acordes y escalas.</li>
                                    <li>Desarrollo de la independencia de manos (tocar acordes con la izquierda y melodía con la derecha).</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Acordes extendidos (maj7, m7, 9, 13, etc.) y su aplicación.</li>
                                    <li>Teoría musical avanzada (modos, progresiones complejas).</li>
                                    <li>Lectura de partituras complejas y polifonía.</li>
                                    <li>Improvisación avanzada y ejecución de solos.</li>
                                    <li>Estudios en estilo clásico y contemporáneo.</li>
                                    <img src="{{ asset('images/piano/partituras2.jpg') }}" alt="imagen de everyonepiano.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de everyonepiano.com</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras</h3>
                                <br>
                                <p>La lectura de partituras es fundamental para los pianistas. Se deben aprender las claves (sol y fa), las notas de cada línea y espacio, y cómo seguir el ritmo de las piezas musicales.</p>
                                <ul>
                                    <li>Clave de sol: generalmente para la mano derecha.</li>
                                    <li>Clave de fa: generalmente para la mano izquierda.</li>
                                    <img src="{{ asset('images/piano/claves.jpg') }}" alt="imagen de Curso de Piano online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Curso de Piano online</figcaption>
                                    <li>Ritmos: negras, corcheas, blancas, etc.</li>
                                    <img src="{{ asset('images/piano/ritmos.png') }}" alt="imagen de Theta Music Trainer">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Theta Music Trainer</figcaption>
                                    <li>Signos de expresión: como staccato (corto) y legato (ligado).</li>
                                    <img src="{{ asset('images/piano/expresiones.jpg') }}" alt="imagen de El Diario de la Música">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de El Diario de la Música</figcaption>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </x-app-user>
@else
    <x-app-noUser>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Piano') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/info.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <section>
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje del Piano</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia del Piano</h3>
                            <p>El piano, uno de los instrumentos más populares y versátiles, fue inventado en 1700 por Bartolomeo Cristofori en Italia. Desde su invención, ha evolucionado significativamente, con el diseño moderno introducido en el siglo XIX. Hoy en día, el piano se usa en una variedad de géneros musicales, desde música clásica hasta jazz y pop.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Conocer las partes del piano (teclas blancas y negras, pedal, etc.).</li>
                                    <img src="{{ asset('images/piano/partes.avif') }}" alt="imagen de Yamaha">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Yamaha</figcaption>
                                    <li>Aprender a leer partituras en clave de sol y fa.</li>
                                    <img src="{{ asset('images/piano/partituras.jpg') }}" alt="imagen de Daniel Gregorio">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Daniel Gregorio</figcaption>
                                    <li>Notas del piano: <strong>C</strong> (Do), <strong>D</strong> (Re), <strong>E</strong> (Mi), <strong>F</strong> (Fa), <strong>G</strong> (Sol), <strong>A</strong> (La), <strong>B</strong> (Si).</li>
                                    <li>Primeros acordes mayores: C, F, G, A.</li>
                                    <li>Ejercicios básicos de digitación para manos derecha e izquierda.</li>
                                    <img src="{{ asset('images/piano/acordes.png') }}" alt="imagen de Marcolara.net">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Marcolara.net</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Escalas mayores y menores.</li>
                                    <img src="{{ asset('images/piano/escalas.jpg') }}" alt="imagen de APRENDE PIANO Online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de APRENDE PIANO Online</figcaption>
                                    <li>Acordes menores y séptimos (Am, Dm, E7, etc.).</li>
                                    <img src="{{ asset('images/piano/acordes2.jpg') }}" alt="imagen de alabanzaicc.wordpress.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de alabanzaicc.wordpress.com</figcaption>
                                    <li>Lectura fluida de partituras en clave de sol y fa.</li>
                                    <li>Improvisación básica usando acordes y escalas.</li>
                                    <li>Desarrollo de la independencia de manos (tocar acordes con la izquierda y melodía con la derecha).</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Acordes extendidos (maj7, m7, 9, 13, etc.) y su aplicación.</li>
                                    <li>Teoría musical avanzada (modos, progresiones complejas).</li>
                                    <li>Lectura de partituras complejas y polifonía.</li>
                                    <li>Improvisación avanzada y ejecución de solos.</li>
                                    <li>Estudios en estilo clásico y contemporáneo.</li>
                                    <img src="{{ asset('images/piano/partituras2.jpg') }}" alt="imagen de everyonepiano.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de everyonepiano.com</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras</h3>
                                <br>
                                <p>La lectura de partituras es fundamental para los pianistas. Se deben aprender las claves (sol y fa), las notas de cada línea y espacio, y cómo seguir el ritmo de las piezas musicales.</p>
                                <ul>
                                    <li>Clave de sol: generalmente para la mano derecha.</li>
                                    <li>Clave de fa: generalmente para la mano izquierda.</li>
                                    <img src="{{ asset('images/piano/claves.jpg') }}" alt="imagen de Curso de Piano online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Curso de Piano online</figcaption>
                                    <li>Ritmos: negras, corcheas, blancas, etc.</li>
                                    <img src="{{ asset('images/piano/ritmos.png') }}" alt="imagen de Theta Music Trainer">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Theta Music Trainer</figcaption>
                                    <li>Signos de expresión: como staccato (corto) y legato (ligado).</li>
                                    <img src="{{ asset('images/piano/expresiones.jpg') }}" alt="imagen de El Diario de la Música">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de El Diario de la Música</figcaption>
                                </ul>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
