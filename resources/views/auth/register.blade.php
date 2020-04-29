@extends('layouts.user.layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
        <div class="register-form shadow shadow-sm p-5 mt-5">
            <div class="register-header text-center">
                <h4>Be a member</h4>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                 <div class="form-group">
                   <label for="name">Full name</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                </div>
               <div class="form-group">
                <label for="phone">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
             <div class="form-group text-center">
                    <button type="submit" class="btn btn-success rounded-0">Continue</button>
                </div>
             </form>
        </div>
    </div>
    </div>
@endsection