@auth
    <x-app-user>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-guitar"></i> {{ __('Afinar un instrumento') }}
            </h2>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <style>
                iframe {
                    display: block;
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                }
                @media (max-width: 641px) {
                    iframe {
                        display: block;
                        width: 100%;
                        margin-left: auto;
                        margin-right: auto;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <h1 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Afina cualquier instrumento :)</h1>
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <center>
                            <iframe src="https://guitarapp.com/tuner.html?embed=true&amp;theme=dark" allow="microphone" title="GuitarApp Online Tuner" style="width: 360px; height:520px; border-style: none; border-radius: 4px;"></iframe>
                        </center>
                    </div>

                    <h1 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Metrónomo musical</h1>
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <center>
                            <iframe src="https://guitarapp.com/metronome.html?embed=true&tempo=120&timeSignature=2&pattern=1" title="Online Metronome" style="width: 360px; height:520px; border-style: none; border-radius: 4px;"></iframe>
                        </center>
                    </div>

                    <h1 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Acordes de instrumentos</h1>
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <center>
                            <iframe src="https://guitarapp.com/chords/embedtool?labels=fingers&colors=two" title="Online Chord Tool" style="width: 360px; height:560px; border-style: none; border-radius: 4px;"></iframe>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </x-app-user>
@else
    <x-app-noUser>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <i class="fa-solid fa-guitar"></i> {{ __('Afinar un intrumento') }}
            </h2>
            <link rel="stylesheet" href="{{ asset('css/bootstrap-tables.css') }}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.0/css/all.css" crossorigin="anonymous">
            <style>
                iframe {
                    display: block;
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                }
                @media (max-width: 641px) {
                    iframe {
                        display: block;
                        width: 100%;
                        margin-left: auto;
                        margin-right: auto;
                    }
                }
            </style>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <!-- Bienvenida -->
                    <h1 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Afina cualquier instrumento :)</h1>
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <center>
                            <iframe src="https://guitarapp.com/tuner.html?embed=true&amp;theme=dark" allow="microphone" title="GuitarApp Online Tuner" style="height: 520px; border-style: none; border-radius: 4px;"></iframe>
                        </center>
                    </div>

                    <h1 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Metrónomo musical</h1>
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <center>
                            <iframe src="https://guitarapp.com/metronome.html?embed=true&tempo=120&timeSignature=2&pattern=1" title="Online Metronome" style="height:520px; border-style: none; border-radius: 4px;"></iframe>
                        </center>
                    </div>

                    <h1 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Acordes de instrumentos</h1>
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <center>
                            <iframe src="https://guitarapp.com/chords/embedtool?labels=fingers&colors=two" title="Online Chord Tool" style="height:560px; border-style: none; border-radius: 4px;"></iframe>
                        </center>
                    </div>

                </div>
            </div>
        </div>

    </x-app-noUser>
@endauth
