<script src="{{ asset('js/logo.js') }}"></script>
<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logoBlanco.png') }}" alt="Logo" class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200 logo"/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('libreria_acordes')" :active="request()->routeIs('libreria_acordes')">
                        {{ __('Librería') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('artistas')" :active="request()->routeIs('artistas')">
                        {{ __('Artistas') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('generos')" :active="request()->routeIs('generos')">
                        {{ __('Géneros') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('canciones')" :active="request()->routeIs('canciones')">
                        {{ __('Canciones') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="px-4 flex space-x-4">
                    <a href="{{ route('login') }}" class="font-medium text-base text-gray-800 dark:text-gray-200 hover:underline">Inicia sesión <i class="fa-solid fa-circle-user"></i></a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('libreria_acordes')" :active="request()->routeIs('libreria_acordes')">
                {{ __('Librería') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('artistas')" :active="request()->routeIs('ver_artistas')">
                {{ __('Artistas') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('generos')" :active="request()->routeIs('generos')">
                {{ __('Géneros') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('canciones')" :active="request()->routeIs('canciones')">
                {{ __('Canciones') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link href="{{ route('login') }}">
                    {{ __('Inicia sesión') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('register') }}">
                    {{ __('Regístrate') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>