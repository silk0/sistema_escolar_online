<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\ControlPagina;

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

Route::get('/', [ControlPagina::class, 'inicio'])
->middleware('guest')
->name('sesion');

Route::get('/dashboard',[ControlPagina::class, 'plantilla'])
->middleware(['auth'])
->name('dashboard');

Route::get('/usuarios',[ControlPagina::class, 'admonUser'])
->middleware(['auth'])
->name('usuarios');

Route::get('/perfil',[ControlPagina::class, 'perfil'])
->middleware(['auth'])
->name('perfil');

require __DIR__.'/auth.php';
