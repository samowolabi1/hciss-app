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
    <div class="banner-contact">
    <div class="dark-overlay-contact">
      <section class="container">
          
          <div class="row mt-10" >
              <div class="col-md-12 wrapper-contact">
                  <div class="content">
                      <div>
                          <h1 class="main-text text-center text-header mt-9">Research</h1>
                      </div>
                  </div>
                      
              </div>
          </div>
          
        </section>
      </div>
    </div>
    <!-- END OF MAIN SECTION -->
    
<!-- contact form -->
     <div class="container mt-5">
      <div class="card">
        <h1 class="main-text text-dark text-header card-header"> Professional Solutions </h1>
        <div class="card-body">
          <p class="card-text text-justify text-dark"> As a pioneer in cybersecurity analytics, with technologies and technical expertise that is second to none, we offer advanced private and public blockchain services, real-time data for dashboard, real-time user behavior analytics, and research.

          </p>

        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="card">
        <h1 class="main-text text-dark text-header card-header"> Privacy and Security Operations  
          </h1>
        <div class="card-body">
          <p class="card-text text-justify text-dark">  With a combination of Artificial Intelligence, Machine learning, and Quantum Analytics, we guarantee privacy and security of the blockchain by biometric integration, strong authentication features, and secure communication across the blockchain network.

          </p>

        </div>
      </div>
    </div>



<!-- End Partners -->
<!-- APPLY FOR A DEMO -->
@endsection