@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Ukelele') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje del Ukelele</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia del Ukelele</h3>
                            <p>El ukelele es un instrumento de cuerda originario de Hawái, aunque tiene raíces en las guitarras portuguesas traídas por los inmigrantes portugueses en el siglo XIX. Su nombre significa "pulgar saltón" en hawaiano, haciendo referencia a la manera en que se tocan las cuerdas. A pesar de su pequeño tamaño, el ukelele se ha convertido en un instrumento popular en todo el mundo, especialmente en géneros como el folk, la música popular y el reggae. Fue popularizado por músicos como Israel Kamakawiwo'ole y George Harrison de The Beatles.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes del ukelele: cuerpo, mástil, cuerdas, trastes, etc.</li>
                                    <img src="{{ asset('images/ukelele/partes.jpg') }}" alt="imagen de Txirula">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Txirula</figcaption>
                                    <li>Aprender la postura correcta y cómo sostener el ukelele.</li>
                                    <img src="{{ asset('images/ukelele/postura.webp') }}" alt="imagen de UkuTabs">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de UkuTabs</figcaption>
                                    <li>Aprender a afinar el ukelele y cómo usar un afinador.</li>
                                    <img src="{{ asset('images/ukelele/cuerdas.png') }}" alt="imagen de Ardemadrid">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Ardemadrid</figcaption>
                                    <li>Primeros acordes: C, F, G, Am.</li>
                                    <li>Introducción a los rasgueos básicos: arriba, abajo, y combinaciones.</li>
                                    <img src="{{ asset('images/ukelele/acordesbasicos.avif') }}" alt="imagen de Kunde Brand">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Kunde Brand</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Aprender acordes mayores, menores y séptimos.</li>
                                    <li>Mejorar en los rasgueos y comenzar a trabajar en técnicas más complejas, como el "fingerpicking".</li>
                                    <img src="{{ asset('images/ukelele/acordes.jpeg') }}" alt="imagen de desafinados.es">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de deafinados.es</figcaption>
                                    <li>Introducción a la lectura de partituras y tablaturas para ukelele.</li>
                                    <li>Desarrollar ritmo y sincronización de ambas manos.</li>
                                    <img src="{{ asset('images/ukelele/tabypart.png') }}" alt="imagen de rosacastillor">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de rosacastillor</figcaption>
                                    <li>Estudios de canciones más complejas que requieran cambio rápido de acordes.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Dominio de técnicas avanzadas como los acordes extendidos y las escalas.</li>
                                    <img src="{{ asset('images/ukelele/escalas.gif') }}" alt="imagen de Hispasonic">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Hispasonic</figcaption>
                                    <li>Aprender a improvisar y agregar adornos en las canciones.</li>
                                    <li>Interpretación de solos de ukelele en canciones complejas.</li>
                                    <li>Participación en grupos de música, explorando el ukelele como parte de una banda.</li>
                                    <li>Desarrollo de un estilo único y personal al interpretar canciones.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer tablaturas para ukelele</h3>
                                <br>
                                <p>Las tablaturas son una forma de notación musical que indica qué trastes se deben presionar en las cuerdas. En el caso del ukelele, cada línea representa una cuerda del instrumento (de abajo hacia arriba: G, C, E, A). Los números en las líneas indican los trastes que deben ser presionados, siendo el "0" una cuerda al aire (sin presionar ningún traste). La lectura de tablaturas es esencial para aprender nuevas canciones y técnicas.</p>
                                <ul>
                                    <li>Las tablaturas para ukelele se leen de izquierda a derecha, y cada número representa un traste específico que debe ser presionado en una cuerda determinada.</li>
                                    <li>La tablatura también indica los rasgueos o golpes de pua mediante marcas o símbolos adicionales.</li>
                                    <img src="{{ asset('images/ukelele/tabypart.png') }}" alt="imagen de rosacastillor">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de rosacastillor</figcaption>
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
                {{ __('Ukelele') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje del Ukelele</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia del Ukelele</h3>
                            <p>El ukelele es un instrumento de cuerda originario de Hawái, aunque tiene raíces en las guitarras portuguesas traídas por los inmigrantes portugueses en el siglo XIX. Su nombre significa "pulgar saltón" en hawaiano, haciendo referencia a la manera en que se tocan las cuerdas. A pesar de su pequeño tamaño, el ukelele se ha convertido en un instrumento popular en todo el mundo, especialmente en géneros como el folk, la música popular y el reggae. Fue popularizado por músicos como Israel Kamakawiwo'ole y George Harrison de The Beatles.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes del ukelele: cuerpo, mástil, cuerdas, trastes, etc.</li>
                                    <img src="{{ asset('images/ukelele/partes.jpg') }}" alt="imagen de Txirula">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Txirula</figcaption>
                                    <li>Aprender la postura correcta y cómo sostener el ukelele.</li>
                                    <img src="{{ asset('images/ukelele/postura.webp') }}" alt="imagen de UkuTabs">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de UkuTabs</figcaption>
                                    <li>Aprender a afinar el ukelele y cómo usar un afinador.</li>
                                    <img src="{{ asset('images/ukelele/cuerdas.png') }}" alt="imagen de Ardemadrid">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Ardemadrid</figcaption>
                                    <li>Primeros acordes: C, F, G, Am.</li>
                                    <li>Introducción a los rasgueos básicos: arriba, abajo, y combinaciones.</li>
                                    <img src="{{ asset('images/ukelele/acordesbasicos.avif') }}" alt="imagen de Kunde Brand">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Kunde Brand</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Aprender acordes mayores, menores y séptimos.</li>
                                    <li>Mejorar en los rasgueos y comenzar a trabajar en técnicas más complejas, como el "fingerpicking".</li>
                                    <img src="{{ asset('images/ukelele/acordes.jpeg') }}" alt="imagen de desafinados.es">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de deafinados.es</figcaption>
                                    <li>Introducción a la lectura de partituras y tablaturas para ukelele.</li>
                                    <li>Desarrollar ritmo y sincronización de ambas manos.</li>
                                    <img src="{{ asset('images/ukelele/tabypart.png') }}" alt="imagen de rosacastillor">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de rosacastillor</figcaption>
                                    <li>Estudios de canciones más complejas que requieran cambio rápido de acordes.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Dominio de técnicas avanzadas como los acordes extendidos y las escalas.</li>
                                    <img src="{{ asset('images/ukelele/escalas.gif') }}" alt="imagen de Hispasonic">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Hispasonic</figcaption>
                                    <li>Aprender a improvisar y agregar adornos en las canciones.</li>
                                    <li>Interpretación de solos de ukelele en canciones complejas.</li>
                                    <li>Participación en grupos de música, explorando el ukelele como parte de una banda.</li>
                                    <li>Desarrollo de un estilo único y personal al interpretar canciones.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer tablaturas para ukelele</h3>
                                <br>
                                <p>Las tablaturas son una forma de notación musical que indica qué trastes se deben presionar en las cuerdas. En el caso del ukelele, cada línea representa una cuerda del instrumento (de abajo hacia arriba: G, C, E, A). Los números en las líneas indican los trastes que deben ser presionados, siendo el "0" una cuerda al aire (sin presionar ningún traste). La lectura de tablaturas es esencial para aprender nuevas canciones y técnicas.</p>
                                <ul>
                                    <li>Las tablaturas para ukelele se leen de izquierda a derecha, y cada número representa un traste específico que debe ser presionado en una cuerda determinada.</li>
                                    <li>La tablatura también indica los rasgueos o golpes de pua mediante marcas o símbolos adicionales.</li>
                                    <img src="{{ asset('images/ukelele/tabypart.png') }}" alt="imagen de rosacastillor">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de rosacastillor</figcaption>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
