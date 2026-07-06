<?php

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

Route::get('/tiendas', function () {
    return view('tiendas');
});