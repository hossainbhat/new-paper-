<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('BackEnd/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('BackEnd/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('BackEnd/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('BackEnd/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">

        <div class="container-fluid">
        <!-- Log In page -->
        <div class="row">
            <div class="col-lg-3 pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
    
                        <h3 class="text-center m-0">
                            <a href="index.html" class="logo logo-admin"><img src="{{asset('BackEnd/images/logo-sm.png')}}" height="60" alt="logo" class="my-3"></a>
                        </h3>
    
                        <div class="px-2 mt-2">
                            <h4 class="text-muted font-size-18 mb-2 text-center">Welcome Back !</h4>
                            <p class="text-muted text-center">Sign in to continue to Amezia.</p>
    
                            <form class="form-horizontal my-4" action="{{route('admin.login')}}" method="post">
                                @csrf 
    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                    </div>                                
                                </div>
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="pages-recoverpw-2.html" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>                                    
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                        
                        <div class="mt-4 text-center">
                            <p class="mb-0">© <?php echo date('Y'); ?> Amezia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 vh-100  d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-center text-white">
                        <h4 class="mt-3 text-white">Welcome To <span class="text-warning">AMEZIA</span> </h4>
                        <h1 class="text-white">Let's Get Started</h1>
                        <p class="mt-3 font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                        <div class="border w-25 mx-auto border-warning"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->
        </div>

       

        <!-- JAVASCRIPT -->
        <script src="{{asset('BackEnd/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('BackEnd/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('BackEnd/js/app.js')}}"></script>

    </body>

</html>
