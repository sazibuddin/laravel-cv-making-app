<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Member Registraion</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
    
  </head>
  <body>
<div class="page-wrapper" >
 
    <header class="header-area shadow-sm">
        <!-- navbar area  -->
        <div class="navbar-area">
           <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
              <a class="navbar-brand" href="{{ route('login') }}">
                  <img src="{{ asset('frontend/assets/images/logo-main-black-1-300x36.png') }}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right">
              
              
                 @if(Auth::check())
                 <li class="nav-item">
                  <a class="nav-link" href="{{ url('user-profile/'. Auth::user()->id) }}">Preview cv</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('personal_info')}}">Edit cv</a>
                </li>
                 <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
                 @endif
                </ul>
              </div>
            </nav>
           </div>

        </div>
        <!-- end of navabr area  -->
    </header>
    <div class="container">
    <div class="page-main">
       @yield('content')
    </div>


    </div>
    <footer class="footer-area shadow-lg  p-4 mt-2 text-center">
      <p>Copyright &copy; All rights reserved for <a href="https://futurefashionology.com/" target="_blank">Future fashonology</a></p>
    </footer>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
