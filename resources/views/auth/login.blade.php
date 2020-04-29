@extends('layouts.user.layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
        <div class="login-form shadow shadow-sm p-5 mt-5">
            <div class="login-header">
                <h4>login here</h4>
            </div>
            <form method="POST" action="{{ route('login') }}">
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
                  <label class="checkbox_container">Remember me
                          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                          <span class="checkmark"></span>
                      </label>
                      <a href="#">Forget password ?</a>
                  </div>
              </div>
             <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block rounded-0">Login</button>
                </div>
              
            </form>
        </div>
    </div>
    </div>
@endsection