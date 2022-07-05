<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('BackEnd/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('BackEnd/images/logo-dark.png')}}" alt="" height="17">
                    </span>
                </a>

                <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('BackEnd/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('BackEnd/images/logo-light.png')}}" alt="" height="17">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="d-none d-sm-block ml-1">
                <div class="dropdown">
                    <button type="button" class="btn header-item waves-effect" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-plus-box-multiple"></i>
                        <span class="d-none d-xl-inline-block ml-1">Tools</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Photoshop</a>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-target="#search-wrap">
                    <a class="header-item" title="Website View" target="__black" href="{{route('front.index')}}">
                         <i class="fas fa-desktop"></i> 
                    </a>
                </button>
            </div>

        </div>

      

        <div class="d-flex">



            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge badge-danger badge-pill">2</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <h6 class="m-0">Notifications (258) </h6>
                    </div>
        
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-12">Dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1 font-size-15">New Message received</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-12">You have 87 unread messages</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                       

                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> View all
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::guard('admin')->user()->image > 0)
                    <img class="rounded-circle header-profile-user" src="{{asset('uploads/profile/'.Auth::guard('admin')->user()->image )}}"
                        alt="Header Avatar">
                    @else 
                        <img class="rounded-circle header-profile-user" src="{{asset('uploads/profile/no-image.jpg')}}"
                        alt="Header Avatar">
                    @endif 
                    <span class="d-none d-xl-inline-block ml-1">{{Auth::guard('admin')->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="dripicons-user d-inlne-block text-muted mr-2"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="dripicons-exit d-inlne-block text-muted mr-2"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>