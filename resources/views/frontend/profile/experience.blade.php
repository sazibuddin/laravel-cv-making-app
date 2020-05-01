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
        @if($experiencs && $experiencs->count() > 0)
        <div class="card mt-3 mb-3">
            <div class="card-body">
                @php
                $i=0;
            @endphp
                @foreach ($experiencs as $item)
                @php
                $i++;
            @endphp
               <div class="card">
                   <div class="card-header"><h5>Experience {{ $i }}</h5></div>
                   <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Company name : </label>
                                <h6 class="mt-1"><b>{{ $item->company_name }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>designation:</label>
                                <h6 class="mt-1"><b>{{ $item->designation }}</b></h6>
                              
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="result">Department : </label>
                                <h6 class="mt-1"><b>{{ $item->department }}</b></h6>
                              
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label >Company Location</label>
                                <h6 class="mt-1"><b>{{ $item->company_locoation }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Start date</label>
                                <h6 class="mt-1"><b>{{ $item->working_from }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>End date</label>
                                <h6 class="mt-1"><b>{{ $item->working_to }}</b></h6>
                            </div>
                        </div>
                     
                     
                    </div>
                   </div>
               </div>
                @endforeach
                <p class="mt-3">Add another information if reuired.</p>
            </div>
        </div>
        @endif
        {{-- success of failed message  --}}
       <div class="card">
           <div class="card-body">
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
                                <input type="text" name="company_name" id="company_name " class="form-control @error('company_name') border-danger @enderror" value="{{ old('company_name') }}">
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
                        <input type="text" name="designation" id="designation" class="form-control @error('designation') border-danger @enderror" value="{{ old('designation') }}">
                        
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
                        <input type="text" name="department" id="department" class="form-control @error('department') border-danger @enderror" value="{{ old('department') }}">
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
                            <input type="text" name="company_locoation" id="company_locoation" class="form-control @error('company_locoation') border-danger @enderror" value="{{ old('company_locoation') }}">
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
                                <input type="date" name="working_from" id="working_from" class="form-control @error('working_from') border-danger @enderror" value="{{ old('working_from') }}">
                                @error('working_from')
                                <span class="input-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="date" name="working_to" id="working_to" class="form-control @error('working_to') border-danger @enderror" value="{{ old('working_to') }}">
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
       </div>
        
    </div>
@endsection