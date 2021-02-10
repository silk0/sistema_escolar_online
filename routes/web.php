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
    return view('sesion.inicioSesion');
})
->middleware('guest')
->name('sesion');

Route::get('/dashboard', function () {
    return view('dashboard.plantilla');
})
->middleware(['auth'])
->name('dashboard');

Route::get('/dashboard/usuarios', function () {
    return view('vistas.administrar_usuarios');
})
->middleware(['auth'])
->name('usuarios');

require __DIR__.'/auth.php';
