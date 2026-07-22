<?php

use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // o la vista que uses para el inicio
});

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
Route::resource('tiendas', TiendaController::class);