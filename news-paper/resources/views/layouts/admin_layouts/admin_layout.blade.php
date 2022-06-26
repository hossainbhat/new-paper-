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

        <link href="{{asset('BackEnd/libs/metrojs/release/MetroJs.Full/MetroJs.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('BackEnd/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('BackEnd/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
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

        <!-- JAVASCRIPT -->
        <script src="{{asset('BackEnd/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/node-waves/waves.min.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('BackEnd/js/app.js')}}"></script>
        <script src="{{asset('BackEnd/js/custom_js.js')}}"></script>
        @toastr_js
        @toastr_render
        @yield("js_script")
    </body>
</html>
