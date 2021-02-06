<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sesion/inicioSesion');
});

Route::get('Crear Cuenta', function () {
    return view('sesion/registroSesion');
});

Route::get('Recuperar Contraseña', function () {
    return view('sesion/recuperarSesion');
});