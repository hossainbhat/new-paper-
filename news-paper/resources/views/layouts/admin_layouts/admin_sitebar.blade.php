@php
     $usr = Auth::guard('admin')->user();
 @endphp
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{route('admin.dashboard')}}" class=" waves-effect">
                    <i class="mdi mdi-speedometer"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- <li class="menu-title">Main</li> -->
                @if ($usr->can('category.view') || $usr->can('category.create'))
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-cookie-bite"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('category.create'))
                        <li><a href="{{route('admin.addEditCategory')}}"><i class="fas fa-circle-notch"></i>Add Category</a></li>
                        @endif 
                        @if ($usr->can('category.view'))
                        <li><a href="{{route('admin.categories')}}"><i class="fas fa-circle-notch"></i>Category List</a></li>
                        @endif 
                    </ul>
                </li>
                @endif 
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-rocket"></i>
                        <span>Post</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html"><i class="fas fa-circle-notch"></i>Inbox</a></li>
                        <li><a href="email-read.html"><i class="fas fa-circle-notch"></i>Read Email</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-tag"></i>
                        <span>Tag</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html"><i class="fas fa-circle-notch"></i>Inbox</a></li>
                        <li><a href="email-read.html"><i class="fas fa-circle-notch"></i>Read Email</a></li>
                    </ul>
                </li>
                @if ($usr->can('admin.view') || $usr->can('role.view'))
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-tag"></i>
                        <span>Role & Parmission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if ($usr->can('role.view'))
                            <li><a href="{{route('admin.roles.index')}}"><i class="fas fa-circle-notch"></i>Role</a></li>
                        @endif
                        @if ($usr->can('admin.view'))
                        <li><a href="{{route('admin.admins.index')}}"><i class="fas fa-circle-notch"></i>Permission</a></li>
                        @endif 
                    </ul>
                </li>
                @endif 
                <li>
                    <a href="#" class=" waves-effect">
                        <i class="fas fa-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.logout')}}" class=" waves-effect">
                        <i class="dripicons-power"></i>
                        <span>Logout</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>