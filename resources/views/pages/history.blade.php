@extends('layouts.pages')
@section('extra-css')
<style type="text/css">
    
.image-div{
    margin-top: 50px;
    height: 350px;
    /* width: 400px; */
    /* background-color: #746c7a; */
    z-index: -2;
}
.image-div img{
    height: 300px;
    width: auto
}
.dark-overlay{
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 50vh;
}
.wrapper{
    margin-top: -100px;
}
.banner{
    height: 50vh;
    width: 100vw;
}

.section-icon{
    position: absolute;
    width: 900px;
    background: #f4f4f4;
    padding: 20px;
    margin-top: -100px;

}
.section-icon i{
    color: var(--primary-color);
    font-size: 5rem;
    text-align: center;

}
</style>

@endsection
@section('content')
   <!-- MAIN SECTION -->
     <!-- MAIN SECTION -->
    <div  style="background-image:url('images/banner.jpg'); background-size: cover;background-attachment: fixed;background-position: center;" class="banner">
    <div class="dark-overlay">
      <section class="container">
          
          <div class="row mt-10" >
              <div class="col-md-12 wrapper">
                  <div class="content">
                      <div>
                          <h1 class="main-text text-center text-header mt-10">Who We Are</h1>
                      </div>
                  </div>
                      
              </div>
          </div>
          
        </section>
      </div>
    </div>
    <!-- END OF MAIN SECTION -->
<div class="container about-section position-relative">
    <div class="row mt-n10" >
        <div class="col-md-6">
            <div class="content">
                <div>
                    <h1 class="main-text text-dark text-header">Our Mission</h1>
                </div>
                <p class="text-justify text-dark"> Health Blockchain Security Services offers a superior Cyber Security Analytics application platform (BSECAaaS) for FinTech businesses and government organizations that are using Blockchain Technology. Our team will ensure that organizations utilizing the ecosystem for their business logic (also called Smart Contracts) are secure in accordance to security standards, compliance and regulations. </p>
            </div>
                
        </div>
        <div class="col-md-6">
          <div class="image-div">
              <img src="images/hciss.jpg" class="img-fluid" alt="HCISS Blockchain security Services">
          </div>
          
        </div>
    </div>
</div>
    

<div class="container about-section position-relative" id="#history">
    <div class="row mt-10" >
        <div class="col-md-6">
          <div class="image-div">
            <img src="images/hciss blockchain (2).jpg" class="img-fluid" alt="HCISS Blockchain security Services">
        </div>
                
        </div>
        <div class="col-md-6">
          

          <div class="content">
            <div>
                <h1 class="main-text text-dark text-header">History</h1>
            </div>
            <p class="text-justify text-dark"> Health Blockchain Security Services is headquartered in the City of Chicago and is a Limited Liability Company in the State of Illinois, Chicago.  The company is owned by CEO Daniel Addison.  Daniel has over 15 years of experience in Information Technology and has worked for various industries such as Telecommunications, Finance, Healthcare Information Technology, Blockchain Technologies and worked as a Data Scientist.. </p>
        </div>
          
        </div>
    </div>
</div>



<!-- End Partners -->
<!-- APPLY FOR A DEMO -->
@endsection