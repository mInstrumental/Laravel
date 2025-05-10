@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-guitar"></i> {{ __('Guitarra') }}
            </h2>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/info.css') }}">
            <style>

            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <section>
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje de la guitarra</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia de la Guitarra</h3>
                            <p>La guitarra es uno de los instrumentos más antiguos y populares del mundo. Su origen se remonta a varios siglos atrás, con antecedentes en instrumentos de cuerdas como la "lira" y el "cítara" en la antigua Grecia, y más tarde la "vihuela" y "laúd" en la Edad Media. Sin embargo, la guitarra tal como la conocemos hoy se desarrolló en España durante el siglo XV y XVI. Con el tiempo, el instrumento fue evolucionando en diseño y técnica. En el siglo XIX, la guitarra española alcanzó su forma moderna, y desde entonces ha sido protagonista en muchos géneros musicales, como la música clásica, el flamenco, el rock, el jazz, y muchos otros. Su versatilidad y accesibilidad han hecho que la guitarra sea un instrumento clave en la música popular mundial.</p>

                            <br>

                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h2>

                            <br>

                            <div class="text-center">
                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h3>
                                <br>
                                <ul>
                                    <li>Postura correcta al tocar sentado y de pie.</li>
                                    <img src="{{ asset('images/guitarra/postura.png') }}" alt="imagen de musinea.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de musinea</figcaption>

                                    <li>Cómo afinar la guitarra (afinación estándar: E A D G B e).</li>
                                    <img src="{{ asset('images/guitarra/afinacion.webp') }}" alt="imagen de Escuela de Musica Erizo">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Escuela de Música Erizo</figcaption>

                                    <li>Lectura de notas en notación inglesa:
                                    <ul>
                                        <li>A = La, B = Si, C = Do, D = Re, E = Mi, F = Fa, G = Sol</li>
                                    </ul>
                                    </li>
                                    <li>Ejercicios de digitación con cuerdas al aire y combinaciones simples.</li>
                                    <li>Primeros acordes mayores: C, G, D, A, E.</li>
                                    <li>Primeros acordes menores: Am, Em, Dm.</li>
                                    <img src="{{ asset('images/guitarra/acordes.webp') }}" alt="imagen de Aprendiendo a Ser Guitarrista">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Aprendiendo a ser Guitarrista</figcaption>
                                    <li>Rasgueos básicos (hacia abajo, alternado).</li>
                                    <li>Cómo leer tablaturas:
                                    <ul>
                                        <li>6 líneas = 6 cuerdas (la inferior es la más grave).</li>
                                        <li>Números indican el traste que debes pulsar.</li>
                                        <li>Ejemplo: <code>e|--0--|</code> significa tocar la primera cuerda al aire.</li>
                                    </ul>
                                    <img src="{{ asset('images/guitarra/tabs.png') }}" alt="imagen de Escuela de Musica Erizo">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Guitarlions.com</figcaption>
                                    </li>

                                    </li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h3>
                                <br>
                                <ul>
                                    <li>Escalas pentatónicas (mayor y menor).</li>
                                    <img src="{{ asset('images/guitarra/escalas-pentatonicas.png') }}" alt="imagen de guitarmonia.es">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de guitarmonia.es</figcaption>
                                    
                                    <li>Intervalos musicales:
                                    <ul>
                                        <li>2ª menor, 2ª mayor, 3ª menor, 3ª mayor, 4ª justa, 5ª justa, 6ª, 7ª.</li>
                                    </ul>
                                    <img src="{{ asset('images/guitarra/intervalos.webp') }}" alt="imagen de Academia Solfeando">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Academia Solfeando</figcaption>
                                    </li>
                                    <li>Acordes con cejilla (formas tipo E y A desplazadas).</li>
                                    <img src="{{ asset('images/guitarra/cejilla.png') }}" alt="imagen de Clases de Guitarra Online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Clases de Guitarra Online</figcaption>
                                    <li>Uso de metrónomo y práctica rítmica con diferentes estilos (balada, rock, reggae).</li>
                                    <li>Tablaturas más avanzadas con ritmos y técnicas como slides o hammer-ons.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h3>
                                <br>
                                <ul>
                                    <li>Acordes extendidos: maj7, m7, sus2, sus4, 7b9, etc.</li>
                                    <img src="{{ asset('images/guitarra/acordes_extendidos.jpg') }}" alt="imagen de Clases de Guitarra Online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Clases de Guitarra Online</figcaption>
                                    <li>Construcción de progresiones armónicas.</li>
                                    <li>Improvisación con modos griegos (jónico, dórico, frigio...).</li>
                                    <li>Técnicas como fingerstyle, tapping, armónicos, sweep picking.</li>
                                    <li>Lectura de partituras simples (pentagrama) y combinación con tablatura.</li>
                                    <img src="{{ asset('images/guitarra/tab_chords.webp') }}" alt="imagen de Clases de EL BLOG DE LA GUITARRA ACÚSTICA Y CLÁSICA">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Clases de EL BLOG DE LA GUITARRA ACÚSTICA Y CLÁSICA</figcaption>
                                    <li>Uso de pedales de efectos y grabación básica.</li>
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
                <i class="fa-solid fa-guitar"></i> {{ __('Guitarra') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="{{ asset('css/info.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">

                        <section>
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje de la guitarra</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia de la Guitarra</h3>
                            <p>La guitarra es uno de los instrumentos más antiguos y populares del mundo. Su origen se remonta a varios siglos atrás, con antecedentes en instrumentos de cuerdas como la "lira" y el "cítara" en la antigua Grecia, y más tarde la "vihuela" y "laúd" en la Edad Media. Sin embargo, la guitarra tal como la conocemos hoy se desarrolló en España durante el siglo XV y XVI. Con el tiempo, el instrumento fue evolucionando en diseño y técnica. En el siglo XIX, la guitarra española alcanzó su forma moderna, y desde entonces ha sido protagonista en muchos géneros musicales, como la música clásica, el flamenco, el rock, el jazz, y muchos otros. Su versatilidad y accesibilidad han hecho que la guitarra sea un instrumento clave en la música popular mundial.</p>

                            <br>

                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h2>

                            <br>

                            <div class="text-center">
                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h3>
                                <br>
                                <ul>
                                    <li>Postura correcta al tocar sentado y de pie.</li>
                                    <img src="{{ asset('images/guitarra/postura.png') }}" alt="imagen de musinea.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de musinea</figcaption>

                                    <li>Cómo afinar la guitarra (afinación estándar: E A D G B e).</li>
                                    <img src="{{ asset('images/guitarra/afinacion.webp') }}" alt="imagen de Escuela de Musica Erizo">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Escuela de Música Erizo</figcaption>

                                    <li>Lectura de notas en notación inglesa:
                                    <ul>
                                        <li>A = La, B = Si, C = Do, D = Re, E = Mi, F = Fa, G = Sol</li>
                                    </ul>
                                    </li>
                                    <li>Ejercicios de digitación con cuerdas al aire y combinaciones simples.</li>
                                    <li>Primeros acordes mayores: C, G, D, A, E.</li>
                                    <li>Primeros acordes menores: Am, Em, Dm.</li>
                                    <img src="{{ asset('images/guitarra/acordes.webp') }}" alt="imagen de Aprendiendo a Ser Guitarrista">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Aprendiendo a ser Guitarrista</figcaption>
                                    <li>Rasgueos básicos (hacia abajo, alternado).</li>
                                    <li>Cómo leer tablaturas:
                                    <ul>
                                        <li>6 líneas = 6 cuerdas (la inferior es la más grave).</li>
                                        <li>Números indican el traste que debes pulsar.</li>
                                        <li>Ejemplo: <code>e|--0--|</code> significa tocar la primera cuerda al aire.</li>
                                    </ul>
                                    <img src="{{ asset('images/guitarra/tabs.png') }}" alt="imagen de Escuela de Musica Erizo">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Guitarlions.com</figcaption>
                                    </li>

                                    </li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h3>
                                <br>
                                <ul>
                                    <li>Escalas pentatónicas (mayor y menor).</li>
                                    <img src="{{ asset('images/guitarra/escalas-pentatonicas.png') }}" alt="imagen de guitarmonia.es">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de guitarmonia.es</figcaption>
                                    
                                    <li>Intervalos musicales:
                                    <ul>
                                        <li>2ª menor, 2ª mayor, 3ª menor, 3ª mayor, 4ª justa, 5ª justa, 6ª, 7ª.</li>
                                    </ul>
                                    <img src="{{ asset('images/guitarra/intervalos.webp') }}" alt="imagen de Academia Solfeando">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Academia Solfeando</figcaption>
                                    </li>
                                    <li>Acordes con cejilla (formas tipo E y A desplazadas).</li>
                                    <img src="{{ asset('images/guitarra/cejilla.png') }}" alt="imagen de Clases de Guitarra Online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Clases de Guitarra Online</figcaption>
                                    <li>Uso de metrónomo y práctica rítmica con diferentes estilos (balada, rock, reggae).</li>
                                    <li>Tablaturas más avanzadas con ritmos y técnicas como slides o hammer-ons.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h3>
                                <br>
                                <ul>
                                    <li>Acordes extendidos: maj7, m7, sus2, sus4, 7b9, etc.</li>
                                    <img src="{{ asset('images/guitarra/acordes_extendidos.jpg') }}" alt="imagen de Clases de Guitarra Online">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Clases de Guitarra Online</figcaption>
                                    <li>Construcción de progresiones armónicas.</li>
                                    <li>Improvisación con modos griegos (jónico, dórico, frigio...).</li>
                                    <li>Técnicas como fingerstyle, tapping, armónicos, sweep picking.</li>
                                    <li>Lectura de partituras simples (pentagrama) y combinación con tablatura.</li>
                                    <img src="{{ asset('images/guitarra/tab_chords.webp') }}" alt="imagen de Clases de EL BLOG DE LA GUITARRA ACÚSTICA Y CLÁSICA">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Clases de EL BLOG DE LA GUITARRA ACÚSTICA Y CLÁSICA</figcaption>
                                    <li>Uso de pedales de efectos y grabación básica.</li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
