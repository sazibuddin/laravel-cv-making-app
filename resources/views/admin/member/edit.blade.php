@extends('layouts.admin.layout')

@section('admin_content')
    <div class="row p-3">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit personal information</h5>    
                </div>    
                   
                <div class="card-body">
                    @if($user->personalInfo && $user->personalInfo->count() > 0)
                    <form action="{{ url('update/personal_info/'. optional($user->personalInfo)->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="fathers_name">Father's name * </label>
                                    <input type="text" id="fathers_name" name="fathers_name" class="form-control rounded-0 @error('fathers_name') border-danger @enderror" value="{{
                                    optional($user->personalInfo)->fathers_name
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
                                    <input type="text" id="mothers_name" name="mothers_name" class="form-control rounded-0 @error('mothers_name') border-danger @enderror" value="{{ optional($user->personalInfo)->mothers_name }}" >
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
                                    <input type="text" id="nationality" name="nationality" class="form-control rounded-0 @error('nationality') border-danger @enderror" value="{{ optional($user->personalInfo)->nationality }}" >
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
                                    <input type="text" id="nid" name="nid" class="form-control rounded-0" placeholder="Your national id card number" value="{{ optional($user->personalInfo)->nid }}">
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
                                    <input type="text" id="con_no" name="con_no" class="form-control rounded-0 @error('con_no') border-danger @enderror" value="{{ optional($user->personalInfo)->con_no }}">
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
                                    <textarea name="address" id="address" class="form-control rounded-0 @error('address') border-danger @enderror" >{{ optional($user->personalInfo)->address }}</textarea>
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
                                   <textarea name="skill" id="skill" class="form-control rounded-0 @error('skill') border-danger @enderror">{{ optional($user->personalInfo)->address }}</textarea>
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
                    @else 
                    <div class="alert alert-danger">This user have not personal info to edit</div>
                    @endif
                     
                </div>    
            </div> 
        </div>
    </div>

@endsection