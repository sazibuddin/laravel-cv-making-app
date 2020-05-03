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

             
            <!-- end personal info form  -->
        </div>

      
         <!-- star personal info form  -->

        @if($information && $information->count() > 0)
         <div class="card">
             <div class="card-header d-flex justify-content-between">
                <h4>Personal information</h4>
                <a href="{{ url('user/edit/personalInfo/'.$information->id) }}" class="btn btn-success rounded-0">Edit</a>
             </div>
             <div class="card-body">
                <form>
                    <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="name">Full name</label>
                                <h6 class="mt-1"><b>{{ $information->name }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="fathers_name">Father's name </label>
                                <h6 class="mt-1"><b>{{ $information->fathers_name }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="mothers_name">mother's name * </label>
                                <h6 class="mt-1"><b>{{ $information->mothers_name }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nationality">Nationality </label>
                                <h6 class="mt-1"><b>{{ $information->nationality }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nid">NID</label>
                                <h6 class="mt-1"><b>{{ $information->nid }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                               <h6 class="mt-1"><b>{{ $information->gender }}</b></h6>
                            
                            </div>
                        </div>
                      
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="contact_number">Contact number</label>
                                <h6 class="mt-1"><b>{{ $information->con_no }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email">Email </label>
                                <h6 class="mt-1"><b>{{ $information->email }}</b></h6>
                             </div>
                        </div>
                         <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="blood_group">Blood group</label>
                                <h6 class="mt-1"><b>{{ $information->blood_group }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <h6 class="mt-1"><b>{{ $information->address }}</b></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Image : </label>
                                <img src="{{ url($information->image) }}" alt="">
                            </div>
                        </div>
                     </div>
                     
                </form>
             </div>
         </div>


         @else 


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
      <form action="{{ route('user.personalInfo.add') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="row">
             <div class="col-md-6 col-lg-6">
                 <div class="form-group">
                     <label for="name">Full name *</label>
                     <input type="text" id="name" name="name" class="form-control rounded-0 @error('name') border-danger @enderror" value="{{ Auth::user()->name }}" readonly>
                     <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                     @error('name')
                     <span class="input-error">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
                 </div>
             </div>
             <div class="col-md-6 col-lg-6">
                 <div class="form-group">
                     <label for="fathers_name">Father's name * </label>
                     <input type="text" id="fathers_name" name="fathers_name" class="form-control rounded-0 @error('fathers_name') border-danger @enderror" placeholder="Your Full name" value="{{ old('fathers_name') }}">
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
                     <input type="text" id="mothers_name" name="mothers_name" class="form-control rounded-0 @error('mothers_name') border-danger @enderror" placeholder="Your Full name" value="{{ old('mothers_name') }}">
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
                     <input type="text" id="nationality" name="nationality" class="form-control rounded-0 @error('nationality') border-danger @enderror" placeholder="Your Full name" value="{{ old('nationality') }}">
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
                     <input type="text" id="nid" name="nid" class="form-control rounded-0" placeholder="Your national id card number" value="{{ old('nid') }}">
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
                     <input type="text" id="con_no" name="con_no" class="form-control rounded-0 @error('con_no') border-danger @enderror" placeholder="Your Contact number" value="{{ old('con_no') }}">
                     @error('con_no')
                     <span class="input-error">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
                 </div>
             </div>
             <div class="col-md-6 col-lg-6">
                 <div class="form-group">
                     <label for="email">Email </label>
                     <input type="email" id="email" name="email" class="form-control rounded-0 @error('email') border-danger @enderror" value="{{ Auth::user()->email }}" readonly >
                     @error('email')
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
                     <textarea name="address" id="address" class="form-control rounded-0 @error('address') border-danger @enderror" placeholder="Your present address" value="{{ old('address') }}"></textarea>
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
                    <textarea name="skill" id="skill" class="form-control rounded-0 @error('skill') border-danger @enderror" placeholder="Write Something about you skill" value="{{ old('skill') }}"></textarea>
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
                    <br>
                    @error('image')
                    <span class="input-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
          <div class="col-md-12 col-lg-12">
             <div class="form-group">
                 <input type="reset" class="btn btn-danger rounded-0" value="Reset">
                 <input type="submit" class="btn btn-success rounded-0" value="Save">
             </div>
          </div>
          </div>
          
     </form>
         @endif
        
    </div>
@endsection