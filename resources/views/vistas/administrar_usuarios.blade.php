@extends('dashboard.plantilla')

@section('usuarios')
class="active"      
@endsection

@section('contenedor-header')
<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add rows</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text">New rows can be added to a DataTable very easily using the ( row.add() ) API method. Simply call the API function with the data that is to be used for the new row (be it an array or object). Multiple rows can be added using the ( rows.add() ) method (note the plural). Data can be likewise be updated with the ( row().data() and row().remove() methods. )
                        </p>
                        <button id="addRow" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; Add new row</button>
                        <div class="table-responsive">
                            <table id="datatable" class="table add-rows">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.1</th>
                                        <th>1.2</th>
                                        <th>1.3</th>
                                        <th>fffffffffffffffffffffffffffffffflllllllllllllllllllllllkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</th>
                                        <th style="text-align:center">
                                            <div style="text-align:center">
                                                <button type="button"  class="btn btn-icon rounded-circle btn-outline-primary waves-effect waves-light">
                                                <i class="feather icon-search"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect waves-light">
                                                <i class="feather icon-search"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect waves-light">
                                                <i class="feather icon-search"></i>
                                                </button>
                                            </div>                                        
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>1.1</th>
                                        <th>1.2</th>
                                        <th>1.3</th>
                                        <th>fffffffffffffffffffffffffffffffflllllllllllllllllllllllkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</th>
                                        <th style="text-align:center">
                                            <div style="text-align:center">
                                                <span>
                                                    <button type="button"  class="btn btn-icon rounded-circle btn-outline-primary waves-effect waves-light"
                                                        data-toggle="tooltip" data-placement="bottom" title="Ver">
                                                        <i class="feather icon-search"></i>
                                                    </button>
                                                </span>
                                                <button type="button"  class="btn btn-icon rounded-circle btn-outline-success waves-effect waves-light"
                                                    data-toggle="tooltip" data-placement="bottom" title="Editar">
                                                    <i class="feather icon-edit-2"></i>
                                                </button>
                                                <button type="button"  class="btn btn-icon rounded-circle btn-outline-danger waves-effect waves-light"
                                                    data-toggle="tooltip" data-placement="bottom" title="Borrar">
                                                    <i class="feather icon-x"></i>
                                                </button>
                                            </div>                                        
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>1.1</th>
                                        <th>1.2</th>
                                        <th>1.3</th>
                                        <th>fffffffffffffffffffffffffffffffflllllllllllllllllllllllkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</th>
                                        <th style="text-align:center">
                                            <div style="text-align:center">
                                                <span data-toggle="modal" data-target="#success">
                                                    <button type="button"  class="btn btn-icon btn-outline-primary waves-effect waves-light"
                                                        data-toggle="tooltip" data-placement="bottom" title="Ver">
                                                        <i class="feather icon-search"></i>
                                                    </button>
                                                </span>
                                                <button type="button"  class="btn btn-icon btn-outline-success waves-effect waves-light"
                                                    data-toggle="tooltip" data-placement="bottom" title="Editar">
                                                    <i class="feather icon-edit-2"></i>
                                                </button>
                                                <button type="button"  class="btn btn-icon btn-outline-danger waves-effect waves-light"
                                                    data-toggle="tooltip" data-placement="bottom" title="Borrar">
                                                    <i class="feather icon-x"></i>
                                                </button>
                                            </div>                                        
                                        </th>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Acciones</th>
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
<div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h5 class="modal-title" id="myModalLabel110">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form form-vertical">
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">First Name</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="First Name">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-icon">Email</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email">
                                        <div class="form-control-position">
                                            <i class="feather icon-mail"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-icon">Mobile</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="Mobile">
                                        <div class="form-control-position">
                                            <i class="feather icon-smartphone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-icon">Password</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="password" id="password-icon" class="form-control" name="contact-icon" placeholder="Password">
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="modal-footer form-group">
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                    <button type="sumit" class="btn btn-success" data-dismiss="modal">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/ Add rows table -->
@endsection

@section('contenedor-body')
<!-- card actions section start -->
<section id="card-actions">

    

</section>
<!-- // card-actions section end -->
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href= "{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endpush

@push('scripts')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        $('#datatable').DataTable({"language": {"url": "{{ asset('app-assets/vendors/js/tables/datatable/español.datatables.json') }}"}});
    </script>
@endpush