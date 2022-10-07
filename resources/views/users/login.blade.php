<x-layout title="Login">

    @push('headTags')
    <!--<link href="{{ asset('css/users/users.css') }}" rel="stylesheet"> -->
     @endpush
      
       <section class="bg-primary" >
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-7 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
          
                          <form method="POST" action="/users/authenticate">
                            
                            @csrf

                            @if ($errors -> any())
                              @foreach ($errors->all() as $error)
                               <p class="text-danger text-xs mt-1">{{$error}}</p>
                              @endforeach
                            @endif
                            
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}"  required/>
                                <label class="form-label">Your Email</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" class="form-control" name="password"
                                value="{{old('password')}}" required/>
                                <label class="form-label" >Password</label>
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                              <div class="form-outline flex-fill mb-0">
                                <input class="form-check-input me-2" type="checkbox" name="remember"/>
                                <label class="form-check-label">Remeber me</label>
                              </div>
                            </div>

                            <div class="d-grid mx-4 mb-3 mb-lg-4 rounded-pill">
                              <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                          </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-2">
          
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                            class="img-fluid" alt="Sample image">
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section> 
        
 
     @push('footerTags')
     <script src='{{ asset('js/users/users.js') }}'></script> 
     @endpush
 
 </x-layout>
     