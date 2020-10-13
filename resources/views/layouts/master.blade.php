<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>HCISS | Health Blockchain</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <link rel="icon" href="{{URL::to('img/WAD.png')}}">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    
 <!--    <link href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" /> -->
    <link href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/animate.min.css')}}" rel="stylesheet" />
  
    <!-- ================== END BASE CSS STYLE ================== -->


    <!-- ================== BEGIN NEW CSS STYLE ================== -->
    <link href="{{url('css/cust-style.css')}}" rel="stylesheet" />
    <link href="{{url('css/style.css')}}" rel="stylesheet" />

    <!-- ================== END NEW CSS STYLE ================== -->
    
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
   
    <link href="{{url('plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" />
 
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
    <!-- notty notification -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   <!--  <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">HCISS Blockchain Security Services</p>
        </div>
    </div> -->

   
    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/images/hciss-logo-1.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="/images/hciss-logo-1.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <!-- <img src="../assets/images/l.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo text -->
                            <!-- <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> -->
                    </a>
                </div>
                   <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                @if ($user->profiles)
                           <img style="width: 30" class="img-circle" src="{{asset('profile_images/'.$user->profiles->photo)}}" />
                            @else
                             <img style="width:30px;" class="img-circle" src="/images/users/1.jpg" alt="" /> 
                            @endif
                            <span class="hidden-xs"> {{ Auth::user()->name }}</span> <b class="caret"></b>&nbsp;

                                </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
         <!-- <div class="container-fluid">
               
               
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            @if ($user->profiles)
                           <img src="{{asset('profile_images/'.$user->profiles->photo)}}" />
                            @else
                             <img src="/img/user-13.jpg" alt="" /> 
                            @endif
                            <span class="hidden-xs"> {{ Auth::user()->name }}</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="{{route('profile_info')}}">Edit Profile</a></li>
                         
                             @if( (Auth::user() !== null && Auth::user()->role_id == 1))
                                 <li><a href="{{route('profile_info')}}">Setting</a></li>
                            @endif

                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                        </ul>

                    </li>
                </ul>
              
            </div> -->
            </nav>
        </header>

        <!-- end #header -->


        
        <!-- begin #sidebar -->
        @include('layouts.partials.flash-message')
        
        @include('sweetalert::alert')
        @include('layouts.sidebar')
       
        <!-- end #sidebar -->
        
        <!-- begin #content -->


        @yield('content')
        <!-- end #content -->
       

        </div>
        <!-- begin scroll to top btn -->
     <footer class="footer">
            © 2020 HCISS | Health Blockchain and Security Services | All Rights Reserved 
        </footer>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('plugins/jquery/jquery-1.9.1.min.js')}}"></script>
  
    <!-- ================== END BASE JS ================== -->
    <script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{url('js/waves.js')}}"></script>
    <script src="{{url('js/sidebarmenu.js')}}"></script>
    <script src="{{url('js/sticky-kit.min.js')}}"></script>
    <script src="{{url('js/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
     <script src="{{url('js/apps.min.js')}}"></script>
      <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{url('plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  
   
    <!-- ================== END PAGE LEVEL JS ================== -->
    @yield('extra-script')
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>


</body>

</html>
