@extends('layouts.admin.layout')
<style>
    .cv-view-main {
        width: 595px;
        height: 842px;
        margin: 10px auto;
    }
    .name {
        font-family: tahoma,sans-serif;
    }
    .name h2 {
        margin: 0;
        padding: 0;
        color: #333333;
    }
    .cv-section-heading {
        color: green;
        font-family: tahoma,sans-serif;
        margin: 0;
        padding: 0;
    }
    .address_contact_info p {
        margin: 0;
        padding: 0;
        font-size: 15px;
        color: #333333;
    }
    .cv-skill-area,
    .cv-education-area {
        margin: 15px 0;
    }
    .cv-view-main p {
        margin: 0;
        padding: 0;
        font-size: 15px;
    }  
    .cv-experience-single,
    .cv-education-single {
        margin: 10px 0;
    }
    .job-periode-are {
        margin: 5px 0;
    }
    .header-image {
        width: 20%;
    }
    .header-image img {
        width: 100%;
    }
</style>
@section('admin_content')
<div class="cv-view-main">
    <div class="card">
        <div class="card-body">
            <div class="cv-header d-flex justify-content-between">
               <div class="header-info">
                <div class="name"><h2>{{ $users->name }}</h2></div>
                <div class="address_contact_info">
                    <p>{{ $users->personalInfo->address }}</p>
                    <p>{{ $users->personalInfo->email }}</p>
                    <p>{{ $users->personalInfo->con_no }}</p>
                    {{-- <p>newmarket, jessore</p> --}}
                </div>
               </div>
               <div class="header-image">
                   <img src="{{ asset($users->personalInfo->image) }}" class="img-thumbnail" alt="">
               </div>
            </div>
            <div class="cv-skill-area">
                <h4 class="cv-section-heading">Skill</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, iusto.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, iusto
                </p>
            </div>
            <div class="cv-experience-area">
                <h4 class="cv-section-heading">Experience</h4>
                @foreach ($users->experienceInfo as $experience)
                <div class="cv-experience-single">
                    <p><b>{{ $experience->company_name }}</b> <small>{{ $experience->designation }}</small></p>
                    <div class="job-periode-are">
                        <p>{{ $experience->working_from }} - {{ $experience->working_to }} <small class="department">{{ $experience->department }}</small></p>
                    </div>
                    <div class="details ml-2">
                        <p>location : {{ $experience->company_locoation }}</p>
                    </div>
                </div>
                @endforeach
              
            </div>

            <div class="cv-education-area">
                <h4 class="cv-section-heading">Education</h4>
                @foreach ($users->educationInfo as $education)
                <div class="cv-education-single">
                    <p><b>{{ $education->degree_title }}</b> <small>{{ $education->education_level }}</small></p>
                    <div class="job-periode-are">
                        <p>Passing year : {{ $education->passing_year }} <small class="department">{{ $education->institute_name }}</small></p>
                        <p>Result : {{ $education->result }} , Board: {{ $education->board_name }}</p>     
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
  </div>
@endsection