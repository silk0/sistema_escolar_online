@extends('sesion/cuerpo')

@section('titulo')    
<title>Registro de Usuario - Sistema Escolar Online</title>
@endsection

@section('footer')
<script src="{{ asset('js/registro_cuenta.js') }}"></script>
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
                                <img src="app-assets/images/pages/register.jpg" alt="branding logo">
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
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                                            <form id="registrarCuentaF" method="POST" action="{{ route('register') }}" novalidate>
                                                @csrf
                                                
                                                <div class="form-label-group form-group">
                                                    <div class="controls">
                                                        <input type="text" id="name" name="name" :value="old('name')"
                                                         class="form-control" placeholder="Nombre Completo" required 
                                                        data-validation-required-message="El campo de 
                                                        nombre completo es obligatorio">
                                                        <input type="text" id="nivel" name="nivel" value="admin" disabled>
                                                    </div>
                                                    <label for="name" :value="__('Name')" >Nombre Completo</label>
                                                </div>
                                                <div class="form-label-group form-group">
                                                    <div class="controls">
                                                        <input id="email" type="email" name="email" :value="old('email')" class="form-control" placeholder="Correo" required
                                                        data-validation-required-message="El campo de correo electrónico es obligatorio">
                                                    </div>
                                                    <label for="email" :value="__('Email')">Correo</label>
                                                </div>
                                                <div class="form-label-group form-group">
                                                    <div class="controls">
                                                        <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" required autocomplete="new-password"
                                                        data-validation-required-message="El campo de contraseña es obligatorio" minlength="8" aria-invalid="false">
                                                    </div>
                                                    <label for="password" :value="__('Password')" >Contraseña</label>
                                                </div>
                                                <div class="form-label-group form-group">
                                                    <div class="controls">
                                                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                                                         placeholder="Confirmar Contraseña"
                                                         required data-validation-required-message="El campo de confirmar contraseña es obligatorio" data-validation-match-match="password" minlength="8" aria-invalid="false">
                                                    </div>
                                                    <label for="password_confirmation" :value="__('Confirm Password')">Confirmar Contraseña</label>
                                                </div>
                                                <a href="{{ asset('/') }}" class="btn btn-outline-primary float-left btn-inline mb-50">Sesion</a>
                                                <button type="submit" id="registrarCuentaB"  name="registrarCuentaB" class="btn btn-primary float-right btn-inline mb-50">Registrar</a>
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