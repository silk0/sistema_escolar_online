@extends('dashboard.plantilla')

@section('usuario')
active     
@endsection

@section('contenedor-header')
@endsection

@section('contenedor-body')
<!-- Add rows table -->
<section id="add-row" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabla de Usarios </h4>
                </div>
                <div class="card-content ">
                    <div class="card-body card-dashboard">
                        <p class="card-text ">
                            Administracion de todos los usarios registrados en el registro.
                        </p>
                        <span data-toggle="modal" data-target="#nuevo">
                            <div class="dt-buttons btn-group mb-2">
                                <button class="btn btn-outline-primary" tabindex="0" 
                                    aria-controls="DataTables_Table_0"
                                    data-toggle="tooltip" data-placement="bottom" title="Registrar un nuevo usuario">
                                    <span>
                                        <i class="feather icon-plus"></i> Nuevo
                                    </span>
                                </button> 
                            </div>
                        </span>
                        <div class="table-responsive ">
                            <table id="datatable" class="table nowrap scroll-horizontal-vertical dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>CORREO</th>
                                        <th>NIVEL</th>
                                        <th class="text-center">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usua)
                                    <tr>
                                        <th>{{$usua->id}}</th>
                                        <th>{{$usua->name}}</th>
                                        <th>{{$usua->email}}</th>
                                        <th>indefinido</th>
                                        <th style="text-align:center">
                                            <div style="text-align:center">
                                                <span data-toggle="modal" data-target="#success">
                                                    <button type="button"  class="btn btn-icon btn-outline-primary waves-effect waves-light"
                                                        data-toggle="tooltip" data-placement="bottom" title="Ver">
                                                        <i class="feather icon-search"></i>
                                                    </button>
                                                </span>
                                                <span data-toggle="modal" data-target="#success">
                                                    <button type="button"  class="btn btn-icon btn-outline-success waves-effect waves-light"
                                                        data-toggle="tooltip" data-placement="bottom" title="Editar">
                                                        <i class="feather icon-edit-2"></i>
                                                    </button>
                                                </span>
                                                <span data-toggle="modal" data-target="#success">
                                                    <button type="button"  class="btn btn-icon btn-outline-danger waves-effect waves-light"
                                                        data-toggle="tooltip" data-placement="bottom" title="Borrar">
                                                        <i class="feather icon-x"></i>
                                                    </button>
                                                </span>
                                            </div>                                        
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>CORREO</th>
                                        <th>NIVEL</th>
                                        <th class="text-center">ACCIONES</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade text-left" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel130" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h5 class="modal-title" id="myModalLabel130">primary Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
            <form id="registrarCuentaF" method="POST" action="{{ route('register') }}" novalidate>        
                @csrf        
                <div class="modal-body control">
                    <label>Usuario: </label>
                    <div class="form-group controls">
                        <input type="text" id="name" name="name" :value="old('name')" class="form-control" placeholder="Nombre Completo" required 
                        data-validation-required-message="El campo de nombre completo es obligatorio">
                    </div>

                    <label>Correo: </label>
                    <div class="form-group controls">
                        <input id="email" type="email" name="email" :value="old('email')" class="form-control" placeholder="Correo" required
                        data-validation-required-message="El campo de correo electrónico es obligatorio">
                    </div>

                    <label>Nivel de usuario: </label>
                    <div class="form-group controls">
                        <select class="select2-data-array form-control" id="nivel_user" name="nivel_user">
                            <option value="Admin" selected>Admistrador</option>    
                            <option value="Prof">Profesor</option>  
                            <option value="Alumn">Alumno</option>          
                        </select>
                    </div>

                    <label>Contraseña: </label>
                    <div class="form-group controls">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" required autocomplete="new-password"
                        data-validation-required-message="El campo de contraseña es obligatorio" minlength="8" aria-invalid="false">
                    </div>

                    <label>Repetir contraseña: </label>
                    <div class="form-group controls">
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirmar Contraseña"
                        required data-validation-required-message="El campo de confirmar contraseña es obligatorio" data-validation-match-match="password" minlength="8" aria-invalid="false">
                    </div>
                    <button type="sumit" class="btn btn-primary" data-dismiss="modal">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/ Add rows table -->
@endsection

@section('modalEditarUsuario')
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
                        <input type="text" id="name" name="name" :value="old('name')" class="form-control" placeholder="Nombre Completo" required 
                        data-validation-required-message="El campo de nombre completo es obligatorio">
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
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href= "{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/authentication.css') }}">    
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
@endpush

@push('scripts')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS--> 
    <script src="{{ asset('app-assets/js/scripts/modal/components-modal.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        $('#datatable').DataTable({"language": {"url": "{{ asset('app-assets/vendors/js/tables/datatable/español.datatables.json') }}"}});
    </script>
    <script src="{{ asset('js/registro_cuenta.js') }}"></script>

@endpush