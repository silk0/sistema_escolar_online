<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<!-- BEGIN: Head-->
@include('dashboard.head')
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns 
            navbar-floating footer-static  " 
            data-open="click" data-menu="vertical-menu-modern" 
            data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    @include('dashboard.main_menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <!-- BEGIN: Header-->
        @include('dashboard.header')
        <!-- END: Header-->


        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Starts -->
                    @yield('contenedor')
                <!-- Dashboard Ends -->
            </div>
        </div>
        

    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('dashboard.footer')
    <!-- END: Footer--> 

</body>
<!-- END: Body-->

</html>