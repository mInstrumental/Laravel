<script src="{{ asset('js/logo.js') }}"></script>
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
<footer class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="flex flex-wrap justify-center gap-6 p-6 columna-vertical">
        <div class="w-full sm:w-1/2 lg:w-1/3">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/logoBlanco.png') }}" alt="Logotipo" class="mb-4 logo" style="max-height: 160px;">
                <p class="text-sm text-gray-600 dark:text-gray-400">© {{ date('Y') }} mInstrumental.</p>
                <br>
                <p class="text-sm text-gray-600 dark:text-gray-400">Todos los derechos reservados.</p>
            </div>
        </div>
                        
        <div class="w-full sm:w-1/2 lg:w-1/3" style="text-align: center;">
            <div>
                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Enlaces Rápidos</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Home</a></li>
                    <li><a href="{{ url('/libreria_acordes') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Librería</a></li>
                    <li><a href="{{ url('/artistas') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Artistas</a></li>
                    <li><a href="{{ url('/generos') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Géneros</a></li>
                    <li><a href="{{ url('/canciones') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Canciones</a></li>
                </ul>
            </div>
        </div>
                            
        <div class="w-full sm:w-1/2 lg:w-1/3" style="text-align: center;">
            <div>
                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Nuestra Privacidad</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/politica_privacidad') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Política de Privacidad</a></li>
                    <li><a href="{{ url('/aviso_legal') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Aviso Legal</a></li>
                    <li><a href="{{ url('/politica_cookies') }}" class="bg-blue-500 justify-center hover:bg-blue-600 p-4 rounded-lg flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Política de Cookies</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>





