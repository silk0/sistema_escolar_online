@extends('dashboard.plantilla')

@section('perfil')
active     
@endsection

@section('contenedor-header')
@endsection

@section('contenedor-body')
<!-- Multiple Rules Validation start -->
<section class="multiple-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Datos de usuarios</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" novalidate>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Usuario</label>
                                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Correo</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Su correo" 
                                            value="{{ Auth::user()->email}}" required data-validation-required-message="El campo correo es obligatorio">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Contraseña</label>
                                            <input type="password" name="password" class="form-control" placeholder="Su contraseña" 
                                            required data-validation-required-message="El campo contraseña es requerido" minlength="8">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Multiple Rule Validation end -->
@endsection


@push('css')

@endpush

@push('scripts')    

@endpush