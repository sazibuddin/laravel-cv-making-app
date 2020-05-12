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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

</head>

<body>
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
                   <li class="icons dropdown">
                          <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                              <span class="activity active"></span>
                              <img src="{{ asset('backend/images/user/1.png') }}" height="40" width="40" alt="">
                          </div>
                          <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                              <div class="dropdown-content-body">
                                  <ul>
                                      <li>
                                          <a href="{{ url('admin/profile/'.Auth::user()->id) }}" class="btn btn-default btn-block"><i class="icon-user"></i> <span>Profile</span></a>
                                      </li>
                                      
                                      <hr class="my-2">
                                      <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btn btn-default btn-block">Logout</button>
                                        </form>
                                      </li>
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
                        <li><li><a href="{{ url('admin/index') }}">All admin</a></li></li>
                      
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
                <p>Copyright &copy; All rights reserved future fashonology</p>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

</body>


</html>