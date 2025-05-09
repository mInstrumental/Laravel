<?php
/**
 * 
 * CONTROLADORES POR DEFECTO DE BREEZE
 * 
 */
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/**
 * Middlesware para comprobar si un usuario es admin
 */
use App\Http\Middleware\IsAdmin;

/**
 * Ruta para la página principal
 */
Route::get('/', function () {
    return view('home.home');
})->name('home');

/**
 * Ruta para la librería de acordes
 */
Route::get('/libreria_acordes', function () {
    return view('home.libreria_acordes');
})->name('libreria_acordes');

Route::get('/afinar_instrumento', function () {
    return view('home.afinar_instrumento');
})->name('afinar_instrumento');


Route::get('/politica_privacidad', function () {
    return view('home.politica_privacidad');
})->name('politica_privacidad');

Route::get('/aviso_legal', function () {
    return view('home.aviso_legal');
})->name('aviso_legal');

Route::get('/politica_cookies', function () {
    return view('home.politica_cookies');
})->name('politica_cookies');

/**
 * Ruta para ver las canciones
 */
Route::get('/canciones', function () {
    return view('home.canciones');
})->name('canciones');

/**
 * Ruta dashboard, requereix auth, verificació (default), i l'usuari Admin
 */
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified', IsAdmin::class])->name('dashboard');


/**
 * 
 * CONTROLADOR DE ARTISTAS
 * 
 */
use App\Http\Controllers\ArtistesController;

/**
 * RUTA PARA MOSTRAR ARTISTAS A LOS USUARIOS
 */
Route::get('/artistas', [ArtistesController::class, 'index'])->name('artistas');

/**
 * RUTA PARA MOSTRAR UN ARTISTA ESPECÍFICO A LOS USUARIOS
 */
Route::get('/artistas/{nombre_artista}', [ArtistesController::class, 'showCanciones'])->name('artista.canciones');

/**
 * RUTA PARA MOSTRAR ARTISTAS A ADMINISTRADORES PROTEGIDA POR AUTH
 */
Route::get('/manage_artistas', [ArtistesController::class, 'manage'])
    ->middleware(['auth', 'verified', IsAdmin::class]) 
    ->name('manage_artistas');  // Nombre de la ruta

/**
 * RUTA PARA SUBIR UN ARTISTA CON MÉTODO POST - STORE
 */
Route::post('/manage_artistas', [ArtistesController::class, 'store'])->name('artistas.store');

/**
 * RUTA PARA ACTUALIZAR UN ARTISTTA CON MÉTODO PUT - UPDATE
 */
Route::put('/manage_artistas/{id}', [ArtistesController::class, 'update'])->name('artistas.update');

/**
 * RUTA PARA ELIMINAR UN ARTISTA CON MÉTODO DELETE - DESTROY
 */
Route::delete('/manage_artistas/{id}', [ArtistesController::class, 'destroy'])->name('artistas.destroy');


/**
 * 
 * CONTROLADOR DE USUARIOS
 * 
 */
use App\Http\Controllers\UsersController;

/**
 * RUTA PARA OBTENER USUARIOS PROTEGIDA POR AUTH
 */
Route::get('/manage_usuarios', [UsersController::class, 'index'])
    ->middleware(['auth', 'verified', IsAdmin::class])
    ->name('manage_usuarios');

/**
 * RUTA PARA SUBIR UN USUARIO CON MÉTODO POST STORE
 */
Route::post('/manage_usuarios', [UsersController::class, 'store'])->name('usuarios.store');

/**
 * RUTA PARA ACTUALIZAR UN USUARIO CON MÉTODO PUT - UPDATE
 */
Route::put('/manage_usuarios/{id}', [UsersController::class, 'update'])->name('usuarios.update');

/**
 * RUTA PARA ELIMINAR UN USUARIO CON MÉTODO DELETE - DESTROY
 */
Route::delete('/manage_usuarios/{id}', [UsersController::class, 'destroy'])->name('usuarios.destroy');


/**
 * 
 * CONTROLADOR DE GÉNEROS
 * 
 */
use App\Http\Controllers\GeneresController;

/**
 * RUTA PARA VER LOS GÉNEROS
 */
Route::get('/generos', [GeneresController::class, 'index'])
    ->name('generos');

/**
 * RUTA PARA MOSTRAR TODAS LAS CANCIONES DE UN GÉNERO
 */
Route::get('/generos/{nombre_genero}', [GeneresController::class, 'showGeneros'])->name('genero.canciones');

/**
 * RUTA PARA VER LOS GÉNEROS PROTEGIDO POR AUTH
 */
Route::get('/manage_generos', [GeneresController::class, 'manage'])
    ->middleware(['auth', 'verified', IsAdmin::class])
    ->name('manage_generos');

/**
 * RUTA PARA SUBIR UN GÉNERO CON POST - STORE
 */
Route::post('/manage_generos', [GeneresController::class, 'store'])->name('generos.store');

/**
 * RUTA PARA EDITAR UN GÉNERO CON PUT - UPDATE
 */
Route::put('/manage_generos/{id}', [GeneresController::class, 'update'])->name('generos.update');

/**
 * RUTA PARA ELIMINAR UN GÉNERO CON DELETE - DESTROY
 */
Route::delete('/manage_generos/{id}', [GeneresController::class, 'destroy'])->name('generos.destroy');

use App\Http\Controllers\CancionesController;
/**
 * RUTA PARA VER LAS CANCIONES
 */
Route::get('/canciones', [CancionesController::class, 'index'])
    ->name('canciones');

Route::get('/mis_canciones', [CancionesController::class, 'misCanciones'])
    ->middleware(['auth', 'verified'])
    ->name('mis_canciones');

Route::get('/canciones/{nombre_artista}/{nombre_cancion}', [CancionesController::class, 'showCancion'])
    ->name('canciones.mostrar');

Route::match(['get', 'post'], '/escribir_cancion', [CancionesController::class, 'store'])
    ->middleware('auth', 'verified')
    ->name('canciones.write');

Route::get('/canciones/{nombre_artista}/{nombre_cancion}/edit', [CancionesController::class, 'editCancion'])
    ->middleware(['auth', 'verified'])
    ->name('editCancion');

Route::put('/canciones/{nombre_artista}/{nombre_cancion}', [CancionesController::class, 'updateCancion'])->name('updateCancion');

    

Route::get('/manage_canciones', [CancionesController::class, 'manage'])
    ->middleware(['auth', 'verified', IsAdmin::class])
    ->name('manage_canciones');

/**
 * RUTA PARA EDITAR UN GÉNERO CON PUT - UPDATE
 */
Route::put('/manage_canciones/{id}', [CancionesController::class, 'update'])->name('canciones.update');

/**
 * RUTA PARA ELIMINAR UN GÉNERO CON DELETE - DESTROY
 */
Route::delete('/manage_canciones/{id}', [CancionesController::class, 'destroy'])->name('canciones.destroy');

use App\Http\Controllers\FavoritController;

Route::post('/favorits/toggle', [FavoritController::class, 'toggle'])
    ->middleware(['auth', 'verified'])
    ->name('favorits.toggle');


Route::get('/mis_favoritos', [FavoritController::class, 'misFavs'])
    ->middleware(['auth', 'verified'])
    ->name('mis_favoritos');

/**
 * RUTAS DE AUTENTICACIÓN POR DEFECTO DE BREEZE
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';