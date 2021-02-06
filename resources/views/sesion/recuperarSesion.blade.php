@extends('sesion/cuerpo')

@section('titulo')    
<title>Recuperar Contraseña - Sistema Escolar Online</title>
@endsection

@section('contenedor')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                                <img src="app-assets/images/pages/forgot-password.png" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2 py-1">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Recupera tu Contraseña</h4>
                                        </div>
                                    </div>
                                    <p class="px-2 mb-0">Por favor ingresa tu correo y te enviaremos instrucciones para que recuperes tu cuenta.</p>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="index.html">
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" class="form-control" placeholder="Correo">
                                                    <label for="inputEmail">Correo</label>
                                                </div>
                                            </form>
                                            <div class="float-md-left d-block mb-1">
                                                <a href="\" class="btn btn-outline-primary btn-block px-75">Regresar a Sesion</a>
                                            </div>
                                            <div class="float-md-right d-block mb-1">
                                                <a href="#" class="btn btn-primary btn-block px-75">Recuperar Contraseña</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
         </div>
    </div>
</div>
@endsection