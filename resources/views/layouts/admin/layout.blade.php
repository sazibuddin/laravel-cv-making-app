<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 04:54:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ asset('public/backend/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


     <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
          <div class="brand-logo">
              <a href="{{ url('admin.home') }}">
                  <b class="logo-abbr">
                      <img src="{{ asset('backend/images/logo.png') }}" alt=""> 
                      Cv
                    </b>
                 <span class="logo-compact"><img src="images/logo-compact.png" alt=""></span>
                  <span class="brand-title">
                      <img src="{{ asset('backend/images/logo-text.png') }}" alt="">
                  </span>
              </a>
          </div>
      </div>
      <!--**********************************
          Nav header end
      ***********************************-->

      <!--**********************************
          Header start
      ***********************************-->
      <div class="header">    
          <div class="header-content clearfix">
              
              <div class="nav-control">
                  <div class="hamburger">
                      <span class="toggle-icon"><i class="icon-menu"></i></span>
                  </div>
              </div>
            <div class="header-right">
                  <ul class="clearfix">
                     <li class="icons dropdown d-none d-md-flex">
                          <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                              <span>Profile</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                          </a>
                          <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                              <div class="dropdown-content-body">
                                  <ul>
                                      <li><a href="#">Profile</a></li>
                                      <li><a href="">Change password</a></li>
                                      <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btn btn-default">Logout</button>
                                        </form>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                      <li class="icons dropdown">
                          <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                              <span class="activity active"></span>
                              <img src="images/user/1.png" height="40" width="40" alt="">
                          </div>
                          <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                              <div class="dropdown-content-body">
                                  <ul>
                                      <li>
                                          <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                      </li>
                                      <li>
                                          <a href="javascript:void()">
                                              <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                          </a>
                                      </li>
                                      
                                      <hr class="my-2">
                                      <li>
                                          <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                      </li>
                                      <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <!--**********************************
          Header end ti-comment-alt
      ***********************************-->

      <!--**********************************
          Sidebar start
      ***********************************-->
      <div class="nk-sidebar">           
          <div class="nk-nav-scroll">
              <ul class="metismenu" id="menu">
                <li><a href="{{ route('admin.home') }}"><i class="icon-speedometer menu-icon"></i> Dashboard</a></li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-users"></i><span class="nav-text">Member</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.all.member') }}">All member</a></li>
                      
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i><span class="nav-text">Admin</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><li><a href="#"> Admin</a></li></li>
                      
                    </ul>
                </li>
               
                 
              </ul>
          </div>
      </div>
      <!--**********************************
          Sidebar end
      ***********************************-->

      <div class="content-body">
     
  @yield('admin_content')

      </div>
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('backend/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/gleek.js') }}"></script>
    <script src="{{ asset('backend/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('backend/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('backend/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('backend/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('backend/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('backend/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>

</body>


</html>