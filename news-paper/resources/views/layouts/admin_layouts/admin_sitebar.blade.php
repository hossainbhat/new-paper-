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

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-cookie-bite"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html"><i class="fas fa-circle-notch"></i>Inbox</a></li>
                        <li><a href="email-read.html"><i class="fas fa-circle-notch"></i>Read Email</a></li>
                    </ul>
                </li>
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