@extends('layouts.admin.layout')
@section('admin_content')
<div class="container">
   <div class="row">
       <div class="col-md-6 offset-md-3 col-lg-6 offset-md-3">
        <div class="card p-3 mt-4">
            <form action="{{ url('admin/password/update/'.Auth::user()->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Full name</label>    
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
                </div> 
                <div class="form-group">
                    <label for="email">Email</label>    
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
                </div> 
                <div class="form-group">
                    <label for="password">New password</label>    
                    <input type="text" class="form-control" id="password" name="password">
                </div> 
                <div class="form-group">
                    <label for="c_passsord">Confirm password</label>    
                    <input type="text" class="form-control" id="c_passsord" name="c_passsord">
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-success rounded-0" value="Update">
                </div>
            </form>
        </div>
       </div>
   </div>
</div>

@endsection