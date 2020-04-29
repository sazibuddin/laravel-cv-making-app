@extends('layouts.user.layout')
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
    .section-heading {
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
    p {
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
@section('content')
<div class="cv-view-main">
    <div class="card">
        <div class="card-body">
            <div class="cv-header d-flex justify-content-between">
               <div class="header-info">
                <div class="name"><h2>Md Sazib uddin</h2></div>
                <div class="degination"> <h4 class="section-heading">Industrial designer</h4></div>
                <div class="address_contact_info">
                    <p>74/0 - b-block</p>
                    <p>newmarket, jessore</p>
                    <p>+8801729441788</p>
                    <p>sazibuddin19@gmail.com</p>
                </div>
               </div>
               <div class="header-image">
                   <img src="assets/images/1588156210.png" class="img-thumbnail" alt="">
               </div>
            </div>
            <div class="cv-skill-area">
                <h4 class="section-heading">Skill</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, iusto.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, iusto
                </p>
            </div>
            <div class="cv-experience-area">
                <h4 class="section-heading">Experience</h4>
                <div class="cv-experience-single">
                    <p><b>Chaklader corp</b> <small>Web developer</small></p>
                    <div class="job-periode-are">
                        <p>2000 - 2010 <small class="department">Programming</small></p>
                    </div>
                    <div class="details ml-2">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="cv-education-area">
                <h4 class="section-heading">Education</h4>
                <div class="cv-education-single">
                    <p><b>Narayanpur bu high school</b> <small>ssc</small></p>
                    <div class="job-periode-are">
                        <p>2010 - 2015 <small class="department">Programming</small></p>
                        <p>Result : 4.95 , Board: jessore</p>     
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection