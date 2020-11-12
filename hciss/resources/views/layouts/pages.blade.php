<doctype! html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



    <link href="{{url('homefiles/css/nav-style.css')}}" rel="stylesheet">
    <link href="{{url('homefiles/css/style.css')}}" rel="stylesheet">
    <link href="{{url('homefiles/css/footer-style.css')}}" rel="stylesheet">

      <link href="{{url('homefiles/css/coming-soon.css')}}" rel="stylesheet">
    <link href="{{url('homefiles/css/about-style.css')}}" rel="stylesheet">
   <!--    <link href="{{url('homefiles/css/app.css')}}" rel="stylesheet"> -->
    
  <link href="{{url('homefiles/css/util.css')}}" rel="stylesheet">
  <link href="{{url('homefiles/css/main.css')}}" rel="stylesheet">
  <link href="{{url('homefiles/css/contact-css.css')}}" rel="stylesheet">
  @yield('extra-css')
    <style>
      @media only screen and (max-width: 780px){
        .h3{
          font-size: 1.5rem
        }
      }

    </style>
  <title>HCISS | We are the Future Securing the Health of Your Blockchain Ecosystem.</title>
  </head>
  <body>
   
    <nav class="navbar navbar-collapse-sm navbar-expand-md navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img class="logo" src="images/hciss_logo.png" alt="hciss logo"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                     <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{route('index')}}" class="nav-link">Home</a>
            </li>
          
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{route('service')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item primary-color border-0 z-depth-1"  href="{{route('bse')}}">BSECAaaS</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="{{route('auditing')}}">Auditing and Analytics</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="{{route('research')}}">Research</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="{{route('academy')}}">Academy</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item primary-color border-0 z-depth-1"  href="{{route('history')}}">HCISS History</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="{{route('history')}}">Mission</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="about.html#partners">Partners</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="{{route('team')}}">Team</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="{{route('history')}}">Testimonials</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="post.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item primary-color border-0 z-depth-1"  href="#">Use Cases</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="#">Articles</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="#">WhitePapers</a>
                <a class="dropdown-item primary-color border-0 z-depth-1" href="contact.html#faq">FAQS</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item primary-color border-0 z-depth-1"  href="{{route('contact')}}">Support</a>
                
              </div>
            </li>

            <li class="nav-item">
              <a href="{{route('career')}}" class="nav-link">Careers</a>
            </li>
          </ul>

            @guest
          <span class="form-inline my-2 my-lg-0">
            
            <a class="btn btn-primary my-2 my-sm-0 rounded-0 ml-2" type="submit" href="{{route('login')}}">Login</a>
            @if(Route::has('register'))
            <a class="btn btn-outline-primary my-2 my-sm-0 rounded-0 ml-2" href="{{route('register')}}">Request A Demo</a>
            @endif
            @else
            <a class="btn btn-primary my-2 my-sm-0 rounded-0 ml-2" type="submit" href="{{ url('/home') }}">Dashboard</a>
          </span>
          @endguest
        </div>
      </div>
    </nav>
 @include('sweetalert::alert')

    <!-- MAIN SECTION -->
  @yield('content')

<!-- End Partners -->
<!-- APPLY FOR A DEMO -->
<section class="demo-application mt-5 bg-dark pt-5 pb-5">
  <header class="container">
    <h1 class="text-center text-header primary-font">Apply For A Demo</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nam.</p>
    <p class="text-center"> <a href="{{route('demo')}}" class="btn btn-outline-primary rounded-0 text-center">APPLY NOW</a></p>
  </header>
</section>
<!-- END APPLY FOR A DEMO -->
 <!-- SUBSCRIBE SECTION -->
<section class="subscribe-section" style="background: rgb(239,239,239);
background: linear-gradient(45deg, rgba(239,239,239,1) 54%, rgba(204,204,204,1) 54%);;">
   <div class="container p-4">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-md-5">
        <header>
          <h3 class="text-header text-dark h3">
            Subscribe To Our Newsletter
          </h3>
          </header>
          <p style="color: #333" class="">
            Get the Latest Health Blockchain Security Services news Events and Resources sent straight to your inbocx quaterly 
          </p>
      </div>
      
      <div class="col-md-5">
        <form method="POST" action="{{route('letter.store')}}">
          @csrf
        <input type="email" name="email" class="form-control rounded-0" required>
      </div>
      <div class="col-md-2">
        <input type="submit" value="Subscribe Now!" class="btn btn-primary rounded-0 outline-none">
      </div>
    </form>
    </div>
  </div>
</section>
 

 <!-- END SUBSCRIBE SECTION -->

<!-- FOOTER SECTION -->
<section class="footer-section" style="background-color: #2e4469">
  
  <div class="footer-clean">
    
    <footer>
        <div class="container">
          <div class="footer-logo">
    <img src="./images/hciss_logo.png" class="logo" alt=""><span class="text-header h5 mb-3 d-inline-block">| We are the Future Securing the Health of Your Blockchain Ecosystem</span>
  </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="#">FAQS</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">HCISS Academy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="about.html#team">Team</a></li>
                        <li><a href="about.html#partners">Partners</a></li>
                        <li><a data-toggle="modal" data-target="#contactModal" href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Page Links</h3>
                    <ul>
                        <li><a href="demo-request.html">Request a Demo</a></li>
                        <li><a href="demo-request.html">Software</a></li>
                        <li><a href="#">privacy Policy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social">
                  <div class="icon-div">
                    <div class="icon"><a href="#"><i class=" fab fa-facebook"></i></a></div>
                    <div class="icon"><a href="#"><i class=" fab fa-twitter"></i></a></div>
                    <div class="icon"> <a href="#"><i class=" fab fa-snapchat"></i></a></div>
                    <div class="icon"><a href="#"><i class=" fab fa-instagram"></i></a></div>
                </div>
                <p class="copyright">Health Blockchain Security © 2020</p>
                </div>
            </div>
        </div>
    </footer>
  </div>
</section>

<!-- END FOOTER SECTION -->

 <!-- CONTACT MODAL -->
 <div class="modal fade text-dark" id="contactModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalTitle">
          Contact Us
        </h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control">
          </div>
          <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-block">Send</button>
      </div>
    </div>
  </div>
</div>

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- END BLOG POSTS -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
      $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 50)
      })

$(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
  loop:true,
  autoplay:true,
  autoplayTimeout:5000,
  nav:false,
  dots:false,
  autoWidth:true,
  items:8,
  margin:42  
});

    if($('.brands_prev').length)
    {
    var prev = $('.brands_prev');
    prev.on('click', function()
    {
    brandsSlider.trigger('prev.owl.carousel');
    });
    }

    if($('.brands_next').length)
    {
    var next = $('.brands_next');
    next.on('click', function()
    {
    brandsSlider.trigger('next.owl.carousel');
    });
    }
    }


});
    </script>
  </body>
</html>