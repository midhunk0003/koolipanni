
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

@include('layouts.admin.site-style')
    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo blue-bg">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="" alt=""></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">

{{--                    <img src="{{url('assets/dark.png')}}" alt="">--}}

            </span> </a>
        <!-- Header Navbar -->
        <nav class="navbar blue-bg navbar-static-top" style="background: #baa69b">
            <!-- Sidebar toggle button-->
            <ul class="nav navbar-nav pull-left">
                <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
            </ul>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages -->

                    <!-- Notifications  -->

                    <!-- User Account  -->
                    <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ url('assets/admin/dist/img/img1.jpg') }}" class="user-image" alt="User Image"> <span class="hidden-xs">Admin</span> </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <div class="pull-left user-img"><img src="{{ url('assets/admin/dist/img/img1.jpg') }}" class="img-responsive img-circle" alt="User"></div>
                                <p class="text-left">{{\Illuminate\Support\Facades\Auth::user()->name}} </p>
                            </li>
{{--                            <li><a href="{{url('my_profile')}}"><i class="icon-profile-male"></i> My Profile</a></li>--}}
{{--                                                       <li role="separator" class="divider"></li>--}}
                           <li><a href="{{url('/logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
