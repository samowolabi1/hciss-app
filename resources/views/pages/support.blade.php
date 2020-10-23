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
                          <h1 class="main-text text-center text-header mt-9">Contact</h1>
                      </div>
                  </div>
                      
              </div>
          </div>
          
        </section>
      </div>
    </div>
    <!-- END OF MAIN SECTION -->
    
<!-- contact form -->

<div class="container contact-form">
  <!-- <div class="contact-image mt-n2" >
      <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
  </div> -->
  <form action="{{route('contact.message')}}" method="POST" class="contact100-form validate-form">
      @csrf
      <h3 class="text-primary">Drop Us a Message</h3>
     <div class="row">
          <div class="col-md-6">
              <div class="form-group">
    
                  <input type="text" name="name" class="form-control" placeholder="Your Name *"/>
              </div>
              <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Your Email" />
              </div>
              <div class="form-group">
                  <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *"/>
              </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Your Subject Here"/>
              </div>
              <div class="form-group">
                  <input type="submit" name="btnSubmit" class="btn-primary btnContact"/>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
              </div>
          </div>
      </div>
  </form>
</div>

<!-- End contact form -->
  
<!-- FAQS -->
<section class="faq-section container">
<header class="h1" id="faq">
  <h1 class="text-header" style="color: #00a9b5">FAQs</h1>
</header>
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</section>



<!-- End Partners -->
<!-- APPLY FOR A DEMO -->
@endsection