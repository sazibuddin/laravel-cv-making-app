@extends('layouts.user.layout')
@section('content')
<div class="registration-form-area shadow-sm p-5 mt-3">
    <div class="profile-setup-header">
        <h4>Be a member of future fashionology</h4>
        <div class="profile-setup-step mb-4">
            <div class="row">
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="profile-step-single text-center {{ Request::path() === 'personal_info' ? 'profile-step-single-active' : ''}}">
                                 <a href="{{ url('personal_info') }}">
                                    <i class="far fa-user"></i>  <br> 
                                    personal
                                 </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="profile-step-single text-center {{ Request::path() === 'educational_info' ? 'profile-step-single-active' : ''}}">
                                <a href="{{ url('educational_info') }}">
                                    <i class="fas fa-graduation-cap"></i>  <br> 
                                    Education/training
                                    </a>
                                    
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="profile-step-single text-center {{ Request::path() === 'experience_info' ? 'profile-step-single-active' : ''}}">
                                <a href="{{ url('experience_info') }}">
                                    <i class="fas fa-briefcase"></i>  <br> 
                                    Experience
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- success of failed message  --}}
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('failed'))
            <div class="alert alert-danger">
                {{ session()->get('failed') }}
            </div>
        @endif
            <form action="{{ route('user.experienceInfo.add') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="company_name">Company name *</label>
                            <input type="text" name="company_name" id="company_name " class="form-control @error('company_name') border-danger @enderror">
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            @error('company_name')
                            <span class="input-error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="designation">Designation  *</label>
                    <input type="text" name="designation" id="designation" class="form-control @error('designation') border-danger @enderror">
                    @error('designation')
                    <span class="input-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="department ">Department   *</label>
                    <input type="text" name="department" id="department" class="form-control @error('department') border-danger @enderror">
                    @error('department')
                    <span class="input-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="company_locoation ">Company locaton   *</label>
                        <input type="text" name="company_locoation" id="company_locoation" class="form-control @error('company_locoation') border-danger @enderror">
                        @error('company_locoation')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>
                <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <label>Employment Period  *</label>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <input type="date" name="working_from" id="working_from" class="form-control @error('working_from') border-danger @enderror">
                            @error('working_from')
                            <span class="input-error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <input type="date" name="working_to" id="working_to" class="form-control @error('working_to') border-danger @enderror">
                            @error('working_to')
                            <span class="input-error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <input type="reset" class="btn btn-danger rounded-0" value="Reset">
                    <input type="submit" class="btn btn-success rounded-0" value="Save">
                </div>
            </div>
            </form>
        
    </div>
@endsection