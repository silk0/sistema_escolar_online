<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;

class ControlPagina extends Controller
{
    public function inicio() {
        return view('sesion.inicioSesion');
    }

    public function plantilla() {
        return view('dashboard.plantilla');
    }

    public function admonUser () {
        $usuarios = App\Models\User::all();
        return view('vistas.administrar_usuarios',compact('usuarios'));
    }
}
