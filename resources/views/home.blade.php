@php
use App\Models\WebsiteVariables;
@endphp
<x-layout title="{{env('APP_NAME')}}">

   @push('headTags')
   <link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
    @endpush
    
    <!-- Hero Start -->
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated zoomIn">Safe and secure Crypto Investment</h1>
                        <p class="text-white pb-3 animated zoomIn">{{env('APP_NAME')}} Investment brings to you an exciting opportunity to make money through Cryptocurrency Investment. Are you ready to dream big and hit reality? Then come and be part of {{env('APP_NAME')}} Investment Investment Platform.</p>
                        <a href="#" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Get a Free Quote</a>
                        <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="img-fluid" src="img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
     <!-- About Start -->
     <div class="container-xxl py-5"> 
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">About Us</h6>
                        <h2 class="mt-2">The best crypto investment platform with 10 years of experience</h2>
                    </div>
                    <p class="mb-4">{{env('APP_NAME')}} Investment Management Company is a distinctive investment services company offering our investors access to high-growth investment opportunities in trading on the stock and currency markets. We implement the latest developments in trading and financial market analysis and offer our participants a choice of various investment plans. Our company benefits from an extensive network of global clients.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Safe and secure</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Instant Withdrawal</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" id="investment-plans">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Investment Plans</h6>
                <h2 class="mt-2">Investment Plans we offer</h2>
            </div>

            @php
             $investmentPlans = WebsiteVariables::investmentPlans();
            @endphp
            
            <div class="row g-6"> 
                 @foreach ( $investmentPlans as $key => $investmentPlan )
                    <div class="col-lg-4 col-md-6 wow zoomIn mb-4" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-brands fa-meta fa-2x"></i>
                            </div>
                            <h5 class="mb-3">{{ $investmentPlan['Name'] }}</h5>
                            <p><b>$ {{ $investmentPlan['Range'] }}</b></p>
                            <p>Referral Commission : {{ $investmentPlan['Referral Commission'] }}%</p>
                            <hr>
                            <p>Total return : {{ $investmentPlan['Return'] }}%</p>
                            <hr>
                            <p>Period : {{ $investmentPlan['Period'] }} Hours</p>
                            <hr>
                            <p>Daily earnings</p>
                            <hr>
                            <p>Instant Withdrawal</p>
                            <hr>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Portfolio Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Testimonials</h6>
                <h2 class="mt-2">What our investors say about us</h2>
            </div>
        </div>
    </div>
    <!-- Portfolio End --> 


    <!-- Testimonial Start -->
    <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s" id="testimonial">
        <div class="container py-5 px-lg-5">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded text-white p-4">
                    <i class="fa fa-quote-left fa-2x mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="text-white mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                <h2 class="mt-2">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <img class="img-fluid rounded w-100" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">George Oren</h5>
                            <small>CEO & acquistions</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">Robert Ordebon</h5>
                            <small>Partner & Co-founder</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">Vicky Hawson</h5>
                            <small>VP sales & marketing</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Team End -->

    @push('footerTags')
    <script src='{{ asset('js/home.js') }}'></script> 
    @endpush

</x-layout>
    