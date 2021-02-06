@extends('sesion/cuerpo')

@section('titulo')    
<title>Registro de Usuario - Sistema Escolar Online</title>
@endsection

@section('contenedor')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-10 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">                                
                                <img src="{{ asset('app-assets/images/pages/register.jpg') }}" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Crear Cuenta</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Complete el siguiente formulario para crear una nueva cuenta.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form >
                                                <div class="form-label-group">
                                                    <input type="text" id="inputNomb" class="form-control" placeholder="Nombres" required>
                                                    <label for="inputNomb">Nombres</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="inputApelli" class="form-control" placeholder="Apellidos" required>
                                                    <label for="inputApelli">Apellidos</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required>
                                                    <label for="inputEmail">Correo</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                                                    <label for="inputPassword">Contraseña</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirmar Contraseña" required>
                                                    <label for="inputConfPassword">Confirmar Contraseña</label>
                                                </div>
                                                <a href="{{ asset('/') }}" class="btn btn-outline-primary float-left btn-inline mb-50">Sesion</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Registrar</a>
                                            </form>
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