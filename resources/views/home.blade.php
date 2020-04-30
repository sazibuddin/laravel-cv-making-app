@extends('layouts.user.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       <h2 class="text-center"> Welcome, {{ Auth::user()->name }}</h2>
                       <div class="content text-center">
                        <p >Start to build you cv</p>
                        <a href="{{ url('personal_info') }}" class="btn btn-link">Start</a></div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
