@extends('sesion/cuerpo')

@section('titulo')    
<title>Inicio de Sesion - Sistema Escolar Online</title>
@endsection

@section('footer')    
<x-auth-validation-errors :errors="$errors" />
@endsection

@section('contenedor')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container simple-validation">
                <div class="col-xl-8 col-11 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                <img src="app-assets/images/pages/login.png" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Sesion</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Bienvenido, por favor inicie sesion con su cuenta.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-1">
                                        <!-- Session Status -->
                                            <x-auth-session-status class="mb-4" :status="session('status')" />

                                            <form method="POST" action="{{ route('login') }}" novalidate>
                                                @csrf
                                                
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <div class="controls">
                                                        <input type="email" :value="old('email')"  name="email" class="form-control" id="email" placeholder="Correo" 
                                                        required  data-validation-required-message="El campo de correo electrónico es obligatorio">
                                                        <div class="form-control-position ">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                    <label for="email" :value="__('Email')">Correo</label>
                                                    
                                                </fieldset>                                                

                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <div class="controls">
                                                        <input type="password" class="form-control" name="password" id="password"  placeholder="Contraseña"
                                                         required data-validation-required-message="El campo de contraseña es obligatorio" minlength="8">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                    </div>
                                                    <label for="password" :value="__('Password')">Contraseña</label>
                                                </fieldset>
                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        
                                                    </div>
                                                    @if (Route::has('password.request'))                                                        
                                                        <div class="text-right"><a href="{{ route('password.request') }}" class="card-link">¿Olvido su contraseña?</a></div>
                                                    @endif
                                                    
                                                </div>
                                                <a href="{{ route('register') }}" class="btn btn-outline-primary float-left btn-inline">Nuevo Registro</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline">Iniciar Sesion</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
                                            <div class="divider-text">OR</div>
                                        </div>
                                        <div class="footer-btn d-inline">
                                            <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
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