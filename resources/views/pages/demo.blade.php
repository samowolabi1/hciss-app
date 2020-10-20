@extends('layouts.pages')
@section('extra-css')
<style type="text/css">
    

      .dark-overlay-contact{
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 30vh;
    }
    .wrapper-contact{
        margin-top: -100px;
    }
    .banner-contact{
        height: 30vh;
        width: 100vw;
        background-image:url('images/banner.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
    }
</style>

@endsection
@section('content')
   <!-- MAIN SECTION -->
 <!-- MAIN SECTION -->
    <div class="banner-contact">
    <div class="dark-overlay-contact">
      <section class="container">
          
          <div class="row mt-10" >
              <div class="col-md-12 wrapper-contact">
                  <div class="content">
                      <div>
                          <h1 class="main-text text-center text-header">Demo Request</h1>
                      </div>
                  </div>
                      
              </div>
          </div>
          
        </section>
      </div>
    </div>
    <!-- END OF MAIN SECTION -->
    
<!-- contact form -->

<div class="container-contact100">
  <div class="wrap-contact100">
    <button class="btn-hide-contact100">
      <i class="zmdi zmdi-close"></i>
    </button>

    <div class="contact100-form-title" style="background-image: url('images/banner.jpg');">
      <span>DEMO</span>
    </div>

    <form action="{{route('demo.request')}}" method="POST" class="contact100-form validate-form">
      @csrf
      <div class="wrap-input100 validate-input">
        <input id="name" class="input100" type="text" name="company_name" placeholder="Company Name">
        <span class="focus-input100"></span>
        <label class="label-input100" for="name">
          <span class="lnr lnr-user m-b-2"></span>
        </label>
      </div>
      
      <div class="wrap-input100 validate-input">
        <input id="name" class="input100" type="text" name="contact_person" placeholder="Contact Person">
        <span class="focus-input100"></span>
        <label class="label-input100" for="name">
          <span class="lnr lnr-user m-b-2"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input">
        <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
        <span class="focus-input100"></span>
        <label class="label-input100" for="email">
          <span class="lnr lnr-envelope m-b-5"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input">
        <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
        <span class="focus-input100"></span>
        <label class="label-input100" for="phone">
          <span class="lnr lnr-smartphone m-b-2"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input">
        <input id="industry" class="input100" type="text" name="industry" placeholder="Industry">
        <span class="focus-input100"></span>
        <label class="label-input100" for="industry">
          <span class="lnr lnr-user m-b-2"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input">
        <input id="name" class="input100" type="text" name="service_sector" placeholder="Service Sector">
        <span class="focus-input100"></span>
        <label class="label-input100" for="name">
          <span class="lnr lnr-user m-b-2"></span>
        </label>
      </div>
  
      <div class="wrap-input100 validate-input">
        <select name="region_id" class="input100 form-control" style="color: #999999">
           <option value="">Select Region</option>
            @foreach($regions as $region)
                <option value="{{$region->id}}">{{$region->name}}</option>
            @endforeach
         
        </select>
        <span class="focus-input100"></span>
        <label class="label-input100" for="">
          <span class="lnr lnr-envelope m-b-5"></span>
        </label>
        
      </div>


      <div class="wrap-input100 validate-input">
        <select name="service_sector" class="input100 form-control" style="color: #999999">
          <option value="Select State of Origin">Service Sector</option>
          <option value="Technology">Technology</option>
          <option value="Health">Health</option>
          <option value="Telemedicin">Telemedicine</option>
         
        </select>
        <span class="focus-input100"></span>
        <label class="label-input100" for="">
          <span class="lnr lnr-envelope m-b-5"></span>
        </label>
        
      </div>
      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn">
          Apply
        </button>
      </div>
    </form>
  </div>
</div>



<!-- End Partners -->
<!-- APPLY FOR A DEMO -->
@endsection