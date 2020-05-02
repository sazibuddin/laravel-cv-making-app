<!DOCTYPE html>
<html class="h-100" lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 04:55:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon.html') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    
</head>

<body class="h-100">
    

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                            <h4 class="text-center mt-4 mb-4">Future fasholonology</h4>
                                @if(session()->has('failed'))
                                <div class="alert alert-danger">
                                    {{ session()->get('failed') }}
                                </div>
                            @endif
                                <form method="POST" action="{{ route('admin.login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                   <div class="form-group">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> 
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                  <div class="form-group">
                                    <div class="remember_forger_pass_option d-flex justify-content-between mt-4">
                                      <label class="checkbox_container">
                                              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                              <span class="checkmark" style="margin-right: 5px;"> Remember me </span>
                                          </label>
                                      </div>
                                  </div>
                                 <div class="form-group">
                                        <button type="submit" class="btn btn-primary mt-5 btn-block rounded-0">Login</button>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('backend/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/gleek.js') }}"></script>
    <script src="{{ asset('backend/js/styleSwitcher.js') }}"></script>
</body>

</html>





