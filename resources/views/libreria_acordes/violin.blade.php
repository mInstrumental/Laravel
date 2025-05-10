@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Violín') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje del Violín</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia del Violín</h3>
                            <p>El violín es uno de los instrumentos más antiguos y reconocidos en la música clásica. Sus orígenes datan del siglo XVI en Italia, donde se desarrolló a partir de instrumentos como la viola da braccio. Su diseño y construcción se perfeccionaron con el tiempo, y en la actualidad, el violín es esencial en orquestas y en la música popular. A lo largo de los siglos, compositores como Vivaldi, Bach y Beethoven lo han inmortalizado en sus obras.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes del violín: caja de resonancia, puente, diapasón, clavijas, arco, etc.</li>
                                    <img src="{{ asset('images/violin/partes.webp') }}" alt="imagen de David Hernández Campuzano">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de David Hernández Campuzano</figcaption>
                                    <li>Cómo sostener correctamente el violín y el arco.</li>
                                    <img src="{{ asset('images/violin/sujetar.webp') }}" alt="imagen de Acid Crow">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Acid Crow</figcaption>
                                    <li>Primeras posiciones en el violín: abierta, primera posición.</li>
                                    <li>Primeras notas: G, D, A, E (notas al aire en las cuerdas del violín).</li>
                                    <img src="{{ asset('images/violin/posiciones.jpg') }}" alt="imagen de Pinterest.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Pinterest.com</figcaption>
                                    <li>Introducción a la lectura de partituras (clave de sol).</li>
                                    <img src="{{ asset('images/violin/partituras.jpg') }}" alt="imagen de Magdalena Sarnot-Wrzecionowska">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Magdalena Sarnot-Wrzecionowska</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Escalas mayores y menores en las primeras posiciones.</li>
                                    <img src="{{ asset('images/violin/escalas.png') }}" alt="imagen de El Blog de Lenguaje Musical">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de El Blog de Lenguaje Musical</figcaption>
                                    <li>Ajuste de la técnica del arco: arco recto, control de velocidad y presión.</li>
                                    <li>Trabajo de vibrato: técnica para darle expresión al sonido.</li>
                                    <li>Introducción a las articulaciones: staccato, legato, spiccato.</li>
                                    <img src="{{ asset('images/violin/articulaciones.jpg') }}" alt="imagen de Wikipedia">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Wikipedia</figcaption>
                                    <li>Lectura de partituras con más complejidad (notas en el pentagrama).</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Técnicas avanzadas de arco: control avanzado de la velocidad, presión y ángulo.</li>
                                    <li>Escalas en posiciones más altas: segunda, tercera, cuarta posición.</li>
                                    <li>Dominio de piezas complejas: conciertos y sonatas.</li>
                                    <img src="{{ asset('images/violin/pieza.svg') }}" alt="imagen de Juan Da.">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Juan Da.</figcaption>
                                    <li>Improvisación avanzada y ejecución en estilos libres.</li>
                                    <li>Interpretación y expresión musical en piezas complejas.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras</h3>
                                <br>
                                <p>El violín utiliza la clave de sol para la lectura de partituras. Es importante saber cómo leer notas y ritmos, así como cómo ejecutar diferentes articulaciones con el arco.</p>
                                <ul>
                                    <li>La clave de sol es fundamental para los violistas. En ella, las notas se leen en el pentagrama.</li>
                                    <li>El violín se toca con una técnica específica que involucra el control de la velocidad y presión del arco.</li>
                                    <li>Las notas en el violín corresponden a diferentes posiciones en el diapasón. Es esencial conocer las posiciones para tocar notas más altas.</li>
                                    <img src="{{ asset('images/violin/posiciones.jpg') }}" alt="imagen de Pinterest.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Pinterest.com</figcaption>
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
                {{ __('Violín') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje del Violín</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia del Violín</h3>
                            <p>El violín es uno de los instrumentos más antiguos y reconocidos en la música clásica. Sus orígenes datan del siglo XVI en Italia, donde se desarrolló a partir de instrumentos como la viola da braccio. Su diseño y construcción se perfeccionaron con el tiempo, y en la actualidad, el violín es esencial en orquestas y en la música popular. A lo largo de los siglos, compositores como Vivaldi, Bach y Beethoven lo han inmortalizado en sus obras.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes del violín: caja de resonancia, puente, diapasón, clavijas, arco, etc.</li>
                                    <img src="{{ asset('images/violin/partes.webp') }}" alt="imagen de David Hernández Campuzano">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de David Hernández Campuzano</figcaption>
                                    <li>Cómo sostener correctamente el violín y el arco.</li>
                                    <img src="{{ asset('images/violin/sujetar.webp') }}" alt="imagen de Acid Crow">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Acid Crow</figcaption>
                                    <li>Primeras posiciones en el violín: abierta, primera posición.</li>
                                    <li>Primeras notas: G, D, A, E (notas al aire en las cuerdas del violín).</li>
                                    <img src="{{ asset('images/violin/posiciones.jpg') }}" alt="imagen de Pinterest.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Pinterest.com</figcaption>
                                    <li>Introducción a la lectura de partituras (clave de sol).</li>
                                    <img src="{{ asset('images/violin/partituras.jpg') }}" alt="imagen de Magdalena Sarnot-Wrzecionowska">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Magdalena Sarnot-Wrzecionowska</figcaption>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Escalas mayores y menores en las primeras posiciones.</li>
                                    <img src="{{ asset('images/violin/escalas.png') }}" alt="imagen de El Blog de Lenguaje Musical">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de El Blog de Lenguaje Musical</figcaption>
                                    <li>Ajuste de la técnica del arco: arco recto, control de velocidad y presión.</li>
                                    <li>Trabajo de vibrato: técnica para darle expresión al sonido.</li>
                                    <li>Introducción a las articulaciones: staccato, legato, spiccato.</li>
                                    <img src="{{ asset('images/violin/articulaciones.jpg') }}" alt="imagen de Wikipedia">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Wikipedia</figcaption>
                                    <li>Lectura de partituras con más complejidad (notas en el pentagrama).</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Técnicas avanzadas de arco: control avanzado de la velocidad, presión y ángulo.</li>
                                    <li>Escalas en posiciones más altas: segunda, tercera, cuarta posición.</li>
                                    <li>Dominio de piezas complejas: conciertos y sonatas.</li>
                                    <img src="{{ asset('images/violin/pieza.svg') }}" alt="imagen de Juan Da.">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Juan Da.</figcaption>
                                    <li>Improvisación avanzada y ejecución en estilos libres.</li>
                                    <li>Interpretación y expresión musical en piezas complejas.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras</h3>
                                <br>
                                <p>El violín utiliza la clave de sol para la lectura de partituras. Es importante saber cómo leer notas y ritmos, así como cómo ejecutar diferentes articulaciones con el arco.</p>
                                <ul>
                                    <li>La clave de sol es fundamental para los violistas. En ella, las notas se leen en el pentagrama.</li>
                                    <li>El violín se toca con una técnica específica que involucra el control de la velocidad y presión del arco.</li>
                                    <li>Las notas en el violín corresponden a diferentes posiciones en el diapasón. Es esencial conocer las posiciones para tocar notas más altas.</li>
                                    <img src="{{ asset('images/violin/posiciones.jpg') }}" alt="imagen de Pinterest.com">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Pinterest.com</figcaption>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
