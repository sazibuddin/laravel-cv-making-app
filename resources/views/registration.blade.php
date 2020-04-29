@extends('layouts.user.layout')
<style>
     <style>
      .btn {
    outline:0;
    width:220px;
    height:45px;
    font-family: 'Montserrat';
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 2px;
    display: inline-block;
    text-align: center;
    cursor: pointer;
  }
  
.btn-goleft {
    color: #31302B;
    background: #FFF;
    margin: 25px;
    border: 1px solid #31302B;
    -webkit-box-shadow: inset 0 0 0 0 #31302B;
            box-shadow: inset 0 0 0 0 #31302B;
    -webkit-transition: all ease 0.8s;
    -o-transition: all ease 0.8s;
    transition: all ease 0.8s;
  }
  .btn-goleft:hover {
    -webkit-box-shadow: inset -220px 0 0 0 #333;
            box-shadow: inset -220px 0 0 0 #333;  
    color:#fff;
  }
    </style>
</style>
@section('content')

<div class="row">
    <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
        <div class="register-form shadow shadow-sm p-5 mt-5">
            <div class="register-header text-center">
                <h4>Be a member</h4>
            </div>
            <form action="#" id="registerForm">
                <div class="form-group">
                   <label for="name">Full name</label>
                   <input type="text" name="name" class="form-control" placeholder="Enter your email" id="Enter your name" autocomplete="off"> 
                </div>
               <div class="form-group">
                <label for="phone">Full name</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" id="password" autocomplete="off"> 
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your email" id="password" autocomplete="off"> 
                    </div>
             <div class="form-group text-center">
                    <button type="button" class="btn btn-goleft">Continue</button>
                </div>
             </form>
        </div>
    </div>
    </div>
@endsection