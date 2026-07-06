<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// Ruta para eventos
Route::get('/eventos', function () {
    return view('eventos');
})->name('eventos');

// Ruta para el foro
Route::get('/foro', function () {
    return view('foro');
})->name('foro');

// Ruta para tiendas
Route::get('/tiendas', function () {
    return view('tiendas');
})->name('tiendas');

Route::get('/canchas', function () {
    return view('canchas');
})->name('canchas');