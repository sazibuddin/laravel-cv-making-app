@extends('layouts.user.layout')
@section('content')
<div class="card mt-4">
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
        <form action="{{ url('user/update/personal_info/'.$personal->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="fathers_name">Father's name * </label>
                        <input type="text" id="fathers_name" name="fathers_name" class="form-control rounded-0 @error('fathers_name') border-danger @enderror" value="{{
                       $personal->fathers_name
                        }}">
                        @error('fathers_name')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="mothers_name">mother's name * </label>
                        <input type="text" id="mothers_name" name="mothers_name" class="form-control rounded-0 @error('mothers_name') border-danger @enderror" value="{{ $personal->mothers_name }}" >
                        @error('mothers_name')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="nationality">Nationality </label>
                        <input type="text" id="nationality" name="nationality" class="form-control rounded-0 @error('nationality') border-danger @enderror" value="{{ $personal->nationality }}" >
                        @error('nationality')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="nid">NID</label>
                        <input type="text" id="nid" name="nid" class="form-control rounded-0" placeholder="Your national id card number" value="{{ $personal->nid }}">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control rounded-0 @error('gender') border-danger @enderror">
                            <option selected disabled>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        @error('nationality')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
              
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="contact_number">Contact number</label>
                        <input type="text" id="con_no" name="con_no" class="form-control rounded-0 @error('con_no') border-danger @enderror" value="{{ $personal->con_no }}">
                        @error('con_no')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
            
                 <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="blood_group">Blood group</label>
                        <select id="blood_group" name="blood_group" class="form-control rounded-0 @error('blood_group') border-danger @enderror">
                            <option selected disabled>Please select your blood group</option>
                            <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                        </select>
                        @error('blood_group')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control rounded-0 @error('address') border-danger @enderror" >{{ $personal->address }}</textarea>
                        @error('address')
                        <span class="input-error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                   <div class="form-group">
                       <label for="skill">Skill</label>
                       <textarea name="skill" id="skill" class="form-control rounded-0 @error('skill') border-danger @enderror">{{ $personal->address }}</textarea>
                       @error('skill')
                       <span class="input-error">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
               </div>
               
                <div class="col-md-6 col-lg-6">
                   <div class="form-group">
                       <label for="image">Select a image (size less than 1mb)</label>
                       <br>
                       <input type="file" name="image">
                       <input type="hidden" name="old_image" value="{{  $personal->image }}">
                   </div>
               </div>
             <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-success rounded-0" value="Update">
                </div>
             </div>
             </div>
             
        </form> 
    </div>
</div>
@endsection