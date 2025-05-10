@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-drum"></i> {{ __('Batería') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje de la Batería</h2class>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia de la Batería</h3>
                            <p>La batería moderna, tal como la conocemos hoy, comenzó a tomar forma a finales del siglo XIX y principios del XX. A lo largo de los años, los bateristas han sido fundamentales en muchos géneros musicales, especialmente en el jazz, el rock, el funk y otros estilos populares. Con el tiempo, la batería fue evolucionando de ser un conjunto de tambores y platillos a una configuración completa con caja, bombo, toms y platillos. Grandes bateristas como Gene Krupa y Buddy Rich fueron pioneros en la evolución de la técnica y la popularidad de la batería.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes de la batería: bombo, caja, toms, platillos, pedales, etc.</li>
                                    <img src="{{ asset('images/bateria/partes.jpg') }}" alt="imagen de SuperProf">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de SuperProf</figcaption>
                                    <li>Aprender a mantener el ritmo con una baqueta.</li>
                                    <img src="{{ asset('images/bateria/baquetas.jpg') }}" alt="imagen de Partituras para Batería">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Partituras para Batería</figcaption>
                                    <li>Dominio del golpe básico: 4/4 (tresillos, corcheas, negras).</li>
                                    <li>Aprender a coordinar las manos y los pies.</li>
                                    <img src="{{ asset('images/bateria/coordinacion.jpg') }}" alt="imagen de HiDrums">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de HiDrums</figcaption>
                                    <li>Primeros patrones de batería (beats simples).</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Desarrollo de la coordinación avanzada: independencia entre manos y pies.</li>
                                    <img src="{{ asset('images/bateria/idependencia.svg') }}" alt="imagen de ppberaun">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de ppberaun</figcaption>
                                    <li>Aprender patrones de batería en compases más complejos (5/4, 7/8, etc.).</li>
                                    <li>Trabajo en dinámicas y control de la velocidad de los golpes.</li>
                                    <li>Introducción a la técnica de "blast beats" y "double bass" (doble pedal).</li>
                                    <img src="{{ asset('images/bateria/blastbeats.jpg') }}" alt="imagen de Wikipedia">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Wikipedia</figcaption>
                                    <li>Trabajo de groove: cómo sentir el ritmo y darle un toque personal al patrón.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Dominio de ritmos complejos, con fills creativos y cambios rápidos.</li>
                                    <li>Elaboración de solos de batería: técnica y musicalidad.</li>
                                    <li>Estilo personal en la ejecución de la batería, incluyendo improvisación.</li>
                                    <li>Trabajo en la interpretación en una banda: cómo contribuir al sonido general.</li>
                                    <li>Preparación para presentaciones en vivo: control y energía en el escenario.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras para batería</h3>
                                <br>
                                <p>Leer partituras para batería requiere conocer las claves específicas para cada elemento de la batería: bombo, caja, toms, platillos, etc. Las partituras para batería suelen ser escritas en pentagramas con una clave de percusión y cada nota representa un golpe en una parte de la batería.</p>
                                <ul>
                                    <li>El bombo se marca generalmente en la parte inferior del pentagrama.</li>
                                    <li>La caja se coloca en la segunda línea desde abajo.</li>
                                    <li>Los toms se colocan en diferentes posiciones dependiendo de su tamaño.</li>
                                    <li>Los platillos (hi-hat, crash, ride) se indican con símbolos especiales en la parte superior del pentagrama.</li>
                                    <img src="{{ asset('images/bateria/partituras.jpg') }}" alt="imagen de Partiruas para Batería">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Partituras para Batería</figcaption>
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
                <i class="fa-solid fa-drum"></i> {{ __('Batería') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje de la Batería</h2class>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia de la Batería</h3>
                            <p>La batería moderna, tal como la conocemos hoy, comenzó a tomar forma a finales del siglo XIX y principios del XX. A lo largo de los años, los bateristas han sido fundamentales en muchos géneros musicales, especialmente en el jazz, el rock, el funk y otros estilos populares. Con el tiempo, la batería fue evolucionando de ser un conjunto de tambores y platillos a una configuración completa con caja, bombo, toms y platillos. Grandes bateristas como Gene Krupa y Buddy Rich fueron pioneros en la evolución de la técnica y la popularidad de la batería.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes de la batería: bombo, caja, toms, platillos, pedales, etc.</li>
                                    <img src="{{ asset('images/bateria/partes.jpg') }}" alt="imagen de SuperProf">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de SuperProf</figcaption>
                                    <li>Aprender a mantener el ritmo con una baqueta.</li>
                                    <img src="{{ asset('images/bateria/baquetas.jpg') }}" alt="imagen de Partituras para Batería">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Partituras para Batería</figcaption>
                                    <li>Dominio del golpe básico: 4/4 (tresillos, corcheas, negras).</li>
                                    <li>Aprender a coordinar las manos y los pies.</li>
                                    <img src="{{ asset('images/bateria/coordinacion.jpg') }}" alt="imagen de HiDrums">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de HiDrums</figcaption>
                                    <li>Primeros patrones de batería (beats simples).</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Desarrollo de la coordinación avanzada: independencia entre manos y pies.</li>
                                    <img src="{{ asset('images/bateria/idependencia.svg') }}" alt="imagen de ppberaun">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de ppberaun</figcaption>
                                    <li>Aprender patrones de batería en compases más complejos (5/4, 7/8, etc.).</li>
                                    <li>Trabajo en dinámicas y control de la velocidad de los golpes.</li>
                                    <li>Introducción a la técnica de "blast beats" y "double bass" (doble pedal).</li>
                                    <img src="{{ asset('images/bateria/blastbeats.jpg') }}" alt="imagen de Wikipedia">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Wikipedia</figcaption>
                                    <li>Trabajo de groove: cómo sentir el ritmo y darle un toque personal al patrón.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Dominio de ritmos complejos, con fills creativos y cambios rápidos.</li>
                                    <li>Elaboración de solos de batería: técnica y musicalidad.</li>
                                    <li>Estilo personal en la ejecución de la batería, incluyendo improvisación.</li>
                                    <li>Trabajo en la interpretación en una banda: cómo contribuir al sonido general.</li>
                                    <li>Preparación para presentaciones en vivo: control y energía en el escenario.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras para batería</h3>
                                <br>
                                <p>Leer partituras para batería requiere conocer las claves específicas para cada elemento de la batería: bombo, caja, toms, platillos, etc. Las partituras para batería suelen ser escritas en pentagramas con una clave de percusión y cada nota representa un golpe en una parte de la batería.</p>
                                <ul>
                                    <li>El bombo se marca generalmente en la parte inferior del pentagrama.</li>
                                    <li>La caja se coloca en la segunda línea desde abajo.</li>
                                    <li>Los toms se colocan en diferentes posiciones dependiendo de su tamaño.</li>
                                    <li>Los platillos (hi-hat, crash, ride) se indican con símbolos especiales en la parte superior del pentagrama.</li>
                                    <img src="{{ asset('images/bateria/partituras.jpg') }}" alt="imagen de Partiruas para Batería">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Partituras para Batería</figcaption>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
