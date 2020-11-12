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
                          <h1 class="main-text text-center text-header mt-9">BSECaas</h1>
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
        <h1 class="main-text text-dark text-header card-header">Blockchain Security Analytics as a Service — BSECAaaS
        </h1>
        <div class="card-body">
          <p class="card-text text-justify text-dark"> Our BSECAaaS provides cybersecurity operational analytics that uses
            advanced predictive modeling, also known as Machine Learning, Internet of
            Things, Quantum Computing and Artificial Intelligence to analyze complex
            data and algorithms, giving an insight into advanced and hidden threats. 
            With this technology, our clients are always a step ahead of malicious and security breaches.
             contracts.

          </p>

          <p>
            
            <button class="btn btn-outline-primary rounded-0 text-center" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Read More
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              
              <p class="text-dark">
                As the popularity and valuation of blockchain and smart contract technology increases, the number of security breaches will increase. This may sound shocking, but it is not. According to statistics from blockchain security providers, in 2018 only, losses amounting to 2.1 billion dollars were incurred due to blockchain security breaches by hackers. Between January and May 2020, $1.4 billion was lost to hackers in the US alone.
With our major focus on PRIVACY and SECURITY, we hope to maintain the health of blockchains globally using our technology that is second to none.

              </p>

            </div>
          </div>

        </div>
      </div>
    </div>


<!-- End Partners -->
<!-- APPLY FOR A DEMO -->
@endsection