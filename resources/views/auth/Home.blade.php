@extends('layout')

@section('styles')
<link href="/css/custom/home.css" rel="stylesheet">
<link href="/css/custom/custom.css" rel="stylesheet">

@endsection


@section('content')


<div class="h-30 blue-name">
    <h5 style="color: white;" class="mb-0 ">Adetula Tolulope</h5>
    <p class="mt-0 blue-name-post" >Graduate Trainee of Information Technology</p>
</div>
<!-- <div class="sub-navigation">
  <div class="">
      <ul class="sub-menu clearfix">
        <li><a href='#'>Personal</a></li>
        <li><a href='#'>Job</a></li>
        <li><a href='#'>Assets</a></li>
        <li><a href='#'>Documents</a></li>
        <li><a href='#'>Leave</a></li>
      </ul>
  </div>
</div> -->
<img  class="mb-4 user-ico " src="/images/0.jpeg" alt="" width="150" height="150">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active mine" id="nav-personal-tab" data-toggle="tab" href="#nav-personal" role="tab" aria-controls="nav-personal" aria-selected="true">Personal</a>
    <a class="nav-item nav-link" id="nav-job-tab" data-toggle="tab" href="#nav-job" role="tab" aria-controls="nav-job" aria-selected="false">Job</a>
    <a class="nav-item nav-link" id="nav-assets-tab" data-toggle="tab" href="#nav-assets" role="tab" aria-controls="nav-assets" aria-selected="false">Assets</a>
    <a class="nav-item nav-link" id="nav-Documents-tab" data-toggle="tab" href="#nav-Documents" role="tab" aria-controls="nav-Documents" aria-selected="false">Documents</a>
    <a class="nav-item nav-link" id="nav-Leave-tab" data-toggle="tab" href="#nav-Leave" role="tab" aria-controls="nav-Leave" aria-selected="false">Leave</a>

  </div>
</nav>
<div class="containers tab-content pt-5" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
    <div style="display: inline-flex">
        <img src="/images/man.svg" alt="man" width="50" height="50" style="display:inline-flex;">
        <h3 style="display:inline-flex;" class="h3-responsive inline mb-0 pl-2 pt-1">Personal</h3>
    </div>
    <hr>

    <p style="display:inline-flex;" class="basic pr-5"> Basic Information</p> 
    <a style="display:inline-flex;" class="btn btn-md btn-theme"> Edit <i class="pl-4 fas fa-pencil-alt pt-1"></i></a> 

    <div class="row pb-3">
      <div class="col-md-3">
          <p>Employee No.</p>
          <p class="border pt-1 pb-1 pl-3 rounded"> 369</p>
      </div>
      <div class="col-md-3">
          <p> Status</p>
          <p class="border pt-1 pb-1 pl-3 rounded"> Active</p>
      </div>
      <div class="col-md-3">
          
      </div>
      <div class="col-md-3">
          
      </div>
    </div>
    <div class="row pb-3">
        <div class="col-md-3">
            <p>Last Name</p>
            <p class="border pt-1 pb-1 pl-3 rounded"> Adetula</p>
        </div>
        <div class="col-md-3">
            <p> First Name</p>
            <p class="border pt-1 pb-1 pl-3 rounded"> Tolulope</p>
        </div>
        <div class="col-md-3">
            <p> Other Name</p>
            <p class="border pt-1 pb-1 pl-3 rounded">John</p>    
        </div>
        <div class="col-md-3">
            
        </div>
      </div>
      <div class="row pb-3">
          <div class="col-md-3">
              <p>Birth Date</p>
              <p class="border pt-1 pb-1 pl-3 rounded">26/11/1996</p>
          </div>
          <div class="col-md-3">
              <p> Gender</p>
              <p class="border pt-1 pb-1 pl-3 rounded">Male</p>
          </div>
          <div class="col-md-3">
              <p> Marital Status</p>
              <p class="border pt-1 pb-1 pl-3 rounded">Single</p>    
          </div>
          <div class="col-md-3">
              
          </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-5">
                <p>E-mail Address</p>
                <p class="border pt-1 pb-1 pl-3 rounded">tolulope.adetula@ariosh.com</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <p>Home Address</p>
                <p class="border pt-1 pb-1 pl-3 rounded">20, Lucas Street, Iju-Ishaga, Lagos</p>
            </div>
           
          </div>
    










  </div>
  
  
  
  
  
  
  <div class="tab-pane fade" id="nav-job" role="tabpanel" aria-labelledby="nav-job-tab">Job</div>
  <div class="tab-pane fade" id="nav-assets" role="tabpanel" aria-labelledby="nav-assets-tab">Assets</div>
  <div class="tab-pane fade" id="nav-Documents" role="tabpanel" aria-labelledby="nav-Documents-tab">Documents</div>
  <div class="tab-pane fade" id="nav-Leave" role="tabpanel" aria-labelledby="nav-Leave-tab">Leave</div>
</div>
@endsection

