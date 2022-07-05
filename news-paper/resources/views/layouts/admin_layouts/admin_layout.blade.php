<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>{{ config('app.name') }} | @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('BackEnd/images/favicon.ico')}}">
        <!-- DataTables -->
        <link href="{{asset('BackEnd/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('BackEnd/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('BackEnd/libs/metrojs/release/MetroJs.Full/MetroJs.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('BackEnd/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('BackEnd/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('BackEnd/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{asset('BackEnd/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('BackEnd/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('BackEnd/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('BackEnd/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('BackEnd/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('BackEnd/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        <!-- App Css-->
        <link href="{{asset('BackEnd/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @toastr_css
        @yield("css_script")
    </head>
    <body data-topbar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include("layouts.admin_layouts.admin_header")
            <!-- ========== Left Sidebar Start ========== -->
            @include("layouts.admin_layouts.admin_sitebar")
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
               @yield("content")
                <!-- End Page-content -->
               @include("layouts.admin_layouts.admin_footer")
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- Responsive examples -->
        <script src="{{asset('BackEnd/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/node-waves/waves.min.js')}}"></script>
         <!-- Required datatable js -->
        <script src="{{asset('BackEnd/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('BackEnd/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('BackEnd/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
        <script src="{{asset('BackEnd/js/pages/form-advanced.init.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('BackEnd/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <!-- Datatable init js -->
        <script src="{{asset('BackEnd/js/pages/datatables.init.js')}}"></script>
        <script src="{{asset('BackEnd/js/app.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('BackEnd/js/custom_js.js')}}"></script>
        @toastr_js
        @toastr_render
        @yield("js_script")
    </body>
</html>
