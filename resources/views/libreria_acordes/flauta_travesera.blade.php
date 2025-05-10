@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Flauta Travesera') }}
            </h2>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/info.css') }}">
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <section>
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje de la Flauta Travessera</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia de la Flauta Travessera</h3>
                            <p>La flauta travesera es un instrumento de viento-madera que se toca soplando a través de un tubo de metal. Su historia se remonta a la antigüedad, pero su forma moderna comenzó a desarrollarse en el siglo XVII, principalmente en Europa. A lo largo de los siglos, la flauta ha sido parte integral de la música clásica, especialmente en composiciones de orquestas y grupos de cámara. Grandes compositores como Mozart y Beethoven escribieron obras importantes para flauta, consolidando su papel en la música clásica.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes de la flauta: embocadura, cuerpo, llaves, etc.</li>
                                    <li>Aprender la postura correcta al tocar la flauta y la técnica de respiración.</li>
                                    <li>Control básico del aire: producir un sonido claro y mantenerlo constante.</li>
                                    <li>Aprender las primeras notas: Do, Re, Mi, Fa, Sol.</li>
                                    <li>Introducción a las primeras piezas sencillas.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Desarrollo de la técnica de digitación para las notas agudas y graves.</li>
                                    <li>Mejora en la calidad del tono y el control del aire.</li>
                                    <li>Aprender a leer partituras más complejas, con más variación rítmica y melódica.</li>
                                    <li>Introducción a las articulaciones (legato, staccato, etc.) y el vibrato.</li>
                                    <li>Trabajo en la coordinación entre ambas manos para los cambios rápidos de llaves.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Dominio de técnicas avanzadas como trinos, mordentes y notas rápidas.</li>
                                    <li>Mejora en la interpretación de piezas complejas y de diferentes estilos musicales.</li>
                                    <li>Introducción a la improvisación y creación de ornamentaciones en las partituras.</li>
                                    <li>Preparación para presentaciones en vivo y el trabajo con conjuntos de cámara y orquestas.</li>
                                    <li>Elaboración de un estilo personal en la interpretación.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras para flauta</h3>
                                <br>
                                <p>La lectura de partituras para flauta es fundamental para desarrollar una técnica y musicalidad adecuadas. Las partituras para flauta se leen en el pentagrama estándar y se utilizan las claves de sol, que es común para la flauta. Los cambios en la digitación y las articulaciones se indican en la partitura, y es importante conocer las diferentes posiciones de los dedos para cada nota.</p>
                                <ul>
                                    <li>Las notas para flauta en el pentagrama están escritas en la clave de sol, donde cada línea y espacio corresponden a una nota específica.</li>
                                    <li>El uso de digitaciones de la flauta para cada nota en el registro grave, medio y agudo es crucial para una ejecución correcta.</li>
                                    <img src="{{ asset('images/flauta_travesera/leerpart.jpg') }}" alt="imagen de Flauta Transversal">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Flauta Transversal</figcaption>
                                    <li>Las articulaciones como el legato (unir notas) y staccato (notas cortas) se indican en la partitura.</li>
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
                {{ __('Flauta travesera') }}
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
                            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Aprendizaje de la Flauta Travessera</h2>

                            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Historia de la Flauta Travessera</h3>
                            <p>La flauta travesera es un instrumento de viento-madera que se toca soplando a través de un tubo de metal. Su historia se remonta a la antigüedad, pero su forma moderna comenzó a desarrollarse en el siglo XVII, principalmente en Europa. A lo largo de los siglos, la flauta ha sido parte integral de la música clásica, especialmente en composiciones de orquestas y grupos de cámara. Grandes compositores como Mozart y Beethoven escribieron obras importantes para flauta, consolidando su papel en la música clásica.</p>

                            <br>

                            <h3 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Niveles de Aprendizaje</h3>

                            <br>

                            <div class="text-center">
                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Principiante</h4>
                                <br>
                                <ul>
                                    <li>Familiarización con las partes de la flauta: embocadura, cuerpo, llaves, etc.</li>
                                    <li>Aprender la postura correcta al tocar la flauta y la técnica de respiración.</li>
                                    <li>Control básico del aire: producir un sonido claro y mantenerlo constante.</li>
                                    <li>Aprender las primeras notas: Do, Re, Mi, Fa, Sol.</li>
                                    <li>Introducción a las primeras piezas sencillas.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Intermedio</h4>
                                <br>
                                <ul>
                                    <li>Desarrollo de la técnica de digitación para las notas agudas y graves.</li>
                                    <li>Mejora en la calidad del tono y el control del aire.</li>
                                    <li>Aprender a leer partituras más complejas, con más variación rítmica y melódica.</li>
                                    <li>Introducción a las articulaciones (legato, staccato, etc.) y el vibrato.</li>
                                    <li>Trabajo en la coordinación entre ambas manos para los cambios rápidos de llaves.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Avanzado</h4>
                                <br>
                                <ul>
                                    <li>Dominio de técnicas avanzadas como trinos, mordentes y notas rápidas.</li>
                                    <li>Mejora en la interpretación de piezas complejas y de diferentes estilos musicales.</li>
                                    <li>Introducción a la improvisación y creación de ornamentaciones en las partituras.</li>
                                    <li>Preparación para presentaciones en vivo y el trabajo con conjuntos de cámara y orquestas.</li>
                                    <li>Elaboración de un estilo personal en la interpretación.</li>
                                </ul>

                                <br>
                                <hr>
                                <br>

                                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cómo leer partituras para flauta</h3>
                                <br>
                                <p>La lectura de partituras para flauta es fundamental para desarrollar una técnica y musicalidad adecuadas. Las partituras para flauta se leen en el pentagrama estándar y se utilizan las claves de sol, que es común para la flauta. Los cambios en la digitación y las articulaciones se indican en la partitura, y es importante conocer las diferentes posiciones de los dedos para cada nota.</p>
                                <ul>
                                    <li>Las notas para flauta en el pentagrama están escritas en la clave de sol, donde cada línea y espacio corresponden a una nota específica.</li>
                                    <li>El uso de digitaciones de la flauta para cada nota en el registro grave, medio y agudo es crucial para una ejecución correcta.</li>
                                    <img src="{{ asset('images/flauta_travesera/leerpart.jpg') }}" alt="imagen de Flauta Transversal">
                                    <figcaption style="color: #9ca3af; font-size: 10px;">Imagen de Flauta Transversal</figcaption>
                                    <li>Las articulaciones como el legato (unir notas) y staccato (notas cortas) se indican en la partitura.</li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
