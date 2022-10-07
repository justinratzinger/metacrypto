<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $description }}" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
      <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">

    @stack('headTags')
</head>

<body>
    <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
  <!--  <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0">{{env('APP_NAME')}}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Guides</a>
                        <div class="dropdown-menu m-0">
                            <a href="/#investment-plans" class="dropdown-item">Investment plans</a>
                            <a href="/#testimonial" class="dropdown-item">Testimonials</a>
                            <a href="#" class="dropdown-item">Start Investing</a>
                        </div>
                    </div>

                    @auth
                    <a href="/dashboard" class="nav-item nav-link">Dashboard</a>
                    <form method="POST" action="/logout" >
                        @csrf
                        <button type="submit" class="nav-item btn btn-secondary btn-sm text-light rounded-pill py-2 px-4 ms-3 mt-4">
                            <i class="fa-solid fa-door-open"></i> Logout
                        </button>
                    </form>
                    @else
                    <a href="/register" class="nav-item nav-link">Register</a>
                    <a href="/login" class="nav-item nav-link">Login</a>
                    @endauth
                </div>
                
            </div>
        </nav>
    </div>-->
    <!-- Navbar End -->

   <!-- <nav class="navbar navbar-expand-lg bg-primary navbar-light ">
        <div class="container-fluid">
             <a href="/" class="navbar-brand p-0">
                <h1 class="m-0">{{env('APP_NAME')}}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Guides</a>
                        <div class="dropdown-menu m-0">
                            <a href="/#investment-plans" class="dropdown-item">Investment plans</a>
                            <a href="/#testimonial" class="dropdown-item">Testimonials</a>
                            <a href="#" class="dropdown-item">Start Investing</a>
                        </div>
                    </div>

                    @auth
                    <a href="/dashboard" class="nav-item nav-link">Dashboard</a>
                    <form method="POST" action="/logout" class="">
                        @csrf
                        <button type="submit" class="nav-item  btn btn-secondary btn-sm text-light rounded-pill py-2 px-4 ms-3 mt-4">
                            <i class="fa-solid fa-door-open"></i> Logout
                        </button>
                    </form>
                    @else
                    <a href="/register" class="nav-item nav-link">Register</a>
                    <a href="/login" class="nav-item nav-link">Login</a>
                    @endauth
                </div>
              </div>

              
        </div>
      </nav> -->

       <!-- Navbar & Hero Start -->
       <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            
           
           <div class="navbar-brand p-0">
            <a href="/" >
                <h1 class="m-0">{{env('APP_NAME')}}</h1>
            </a>

            @auth
               <button type="button" id="sidebarCollapse" class="btn btn-lg">
                <i class="fas fa-align-left"></i>
                <span>Menu</span>
               </button> 
            @endauth
           </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Guides</a>
                        <div class="dropdown-menu m-0">
                            <a href="/#investment-plans" class="dropdown-item">Investment plans</a>
                            <a href="/#testimonial" class="dropdown-item">Testimonials</a>
                            <a href="#" class="dropdown-item">Start Investing</a>
                        </div>
                    </div>
                      @guest
                      <a href="/register" class="nav-item nav-link">Register</a>
                      <a href="/login" class="nav-item nav-link">Login</a>
                      @endguest
                </div>

                @auth
                <form method="POST" action="/logout" class="">
                    @csrf
                    <a  onclick="this.closest('form').submit();return false;" href="javascript:{}" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3"> <i class="fa-solid fa-door-open"></i> Logout</a>
                </form>  
                @endauth
                
                
            </div>
        </nav>

    </div>
    <!-- Navbar & Hero End -->
    
    <x-sidebar />
    <x-flash-message />

    <div >
        {{$slot}} 
    </div>
       
    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">{{env('APP_NAME')}}</a>, All Right Reserved. 
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src='{{ asset('js/general.js') }}'></script> 
    
    @stack('footerTags')    
</body>

</html>