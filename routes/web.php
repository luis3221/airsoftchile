<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // o la vista que uses para el inicio
});

/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/foro', function () {
    return view('foro');
});

Route::get('/canchas', function () {
    return view('canchas');
});

/*
|--------------------------------------------------------------------------
| Módulo Tiendas (CRUD completo)
|--------------------------------------------------------------------------
| Route::resource genera automáticamente las 7 rutas RESTful estándar,
| usando los verbos HTTP correctos para cada operación:
|
|  GET    /tiendas              -> index   (listar)
|  GET    /tiendas/create        -> create  (formulario de creación)
|  POST   /tiendas               -> store   (guardar)
|  GET    /tiendas/{tienda}      -> show    (detalle)
|  GET    /tiendas/{tienda}/edit -> edit    (formulario de edición)
|  PUT    /tiendas/{tienda}      -> update  (actualizar)
|  DELETE /tiendas/{tienda}      -> destroy (eliminar)
*/
// Gestionar tiendas (crear, editar, eliminar) requiere haber iniciado sesión.
// Debe registrarse antes que el grupo público: /tiendas/create es una ruta
// literal y tiene que resolverse antes que el comodín /tiendas/{tienda}.
Route::resource('tiendas', TiendaController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth');

Route::resource('tiendas', TiendaController::class)
    ->except(['create', 'store', 'edit', 'update', 'destroy']);