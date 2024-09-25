@extends('layouts.main')
@push('ul')
<ul class="nav navbar-nav menu">
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('sale')}}">Project's</a></li>
<li><a href="{{url('/login')}}">Login</a></li>
<li><a href="{{url('/register')}}">SignUp</a></li>
</ul>
@endpush


@push('css')
<link href="{{asset('assets/css/sale.css')}}" rel="stylesheet">
@endpush

@push('whatsapp')
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-649ecc10-852a-4286-afd4-46be45fbfe65"></div>
@endpush


@section('main.container')

<!-- ============================================================== -->
                           <!-- Modal -->
        <!-- ============================================================== -->
        <!-- Modal start -->
        <div class="modal fade" id="Property-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">
                  <h2 class="text-center mb-4">Detail's About EMARALD</h2>
                    <div>
                        <img src="{{asset('assets/images2/property-1.jpg')}}" height="350px" alt="Property 1">
                        <h4 class="mt-3">PROPERTY NAME : EMARALD</h4>
                        <h5>PROPERTY CODE : EMD</h5>
                        <p class="price">₹1,00,00,000</p>
                    </div>
                    <div>
                      <h5>Description</h5>
                      <p>For knowing more about the project please send us the Project Code through the WhatsApp Chat given below.</p>
                    </div>
                  <!-- Modal Footer -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="{{url('/book')}}"><button type="button" class="btn btn-success">Book Now</button></a>
                 </div>
              </div>
            </div>
        </div><!--end modal -->


  

        <!-- Modal start -->
        <div class="modal fade" id="Property-2">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">
                  <h2 class="text-center mb-4">Detail's About PEARL</h2>
                    <div>
                        <img src="{{asset('assets/images2/property-2.jpg')}}" height="350px" alt="Property 2">
                        <h4>PROPERTY NAME : PEARL</h4>
                        <h5>PROPERTY CODE : PRL</h5>
                        <p class="price">₹80,00,000</p>
                    </div>
                    <div>
                      <h5>Description</h5>
                      <p>For knowing more about the project please send us the Project Code through the WhatsApp Chat given below.</p>
                    </div>
                  <!-- Modal Footer -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="{{url('/book')}}"><button type="button" class="btn btn-success">Book Now</button></a>
                 </div>
              </div>
            </div>
        </div><!--end modal -->

        <!-- Modal start -->
        <div class="modal fade" id="Property-3">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">
                  <h2 class="text-center mb-4">Detail's About RUBY</h2>
                    <div>
                        <img src="{{asset('assets/images2/property-3.jpg')}}" height="350px" alt="Property 3">
                        <h4>PROPERTY NAME : RUBY</h4>
                        <h5>PROPERTY CODE : RBY</h5>
                        <p class="price">₹1,20,00,000</p>
                    </div>
                    <div>
                      <h5>Description</h5>
                      <p>For knowing more about the project please send us the Project Code through the WhatsApp Chat given below.</p>
                    </div>
                  <!-- Modal Footer -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="{{url('/book')}}"><button type="button" class="btn btn-success">Book Now</button></a>
                 </div>
              </div>
            </div>
        </div><!--end modal -->

        <!-- Modal start -->
        <div class="modal fade" id="Property-4">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">
                  <h2 class="text-center mb-4">Detail's About SUMMER</h2>
                    <div>
                        <img src="{{asset('assets/images2/property-4.jpg')}}" height="350px" alt="Property 4">
                        <h4>PROPERTY NAME : SUMMER</h4>
                        <h5>PROPERTY CODE : SMR</h5>
                        <p class="price">₹1,20,00,000</p>
                    </div>
                    <div>
                      <h5>Description</h5>
                      <p>For knowing more about the project please send us the Project Code through the WhatsApp Chat given below.</p>
                    </div>
                  <!-- Modal Footer -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="{{url('/book')}}"><button type="button" class="btn btn-success">Book Now</button></a>
                 </div>
              </div>
            </div>
        </div><!--end modal -->

        <!-- Modal start -->
        <div class="modal fade" id="Property-5">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">
                  <h2 class="text-center mb-4">Detail's About Oasis Estates</h2>
                    <div>
                        <img src="{{asset('assets/images2/property-5.jpg')}}" height="350px" alt="Property 5">
                        <h4>PROPERTY NAME : Oasis Estates </h4>
                        <h5>PROPERTY CODE : OSS</h5>
                        <p class="price">₹1,50,00,000</p>
                    </div>
                    <div>
                      <h5>Description</h5>
                      <p>For knowing more about the project please send us the Project Code through the WhatsApp Chat given below.</p>
                    </div>
                  <!-- Modal Footer -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="{{url('/book')}}"><button type="button" class="btn btn-success">Book Now</button></a>
                 </div>
              </div>
            </div>
        </div><!--end modal -->

        <!-- Modal start -->
        <div class="modal fade" id="Property-6">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">
                  <h2 class="text-center mb-4">Detail's About Rolex</h2>
                    <div>
                        <img src="{{asset('assets/images2/property-7.jpg')}}" height="350px" alt="Property 6">
                        <h4>PROPERTY NAME : Rolex</h4>
                        <h5>PROPERTY CODE : RLX</h5>
                        <p class="price">₹1,80,00,000</p>
                    </div>
                    <div>
                      <h5>Description</h5>
                      <p>For knowing more about the project please send us the Project Code through the WhatsApp Chat given below.</p>
                    </div>
                  <!-- Modal Footer -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="{{url('/book')}}"><button type="button" class="btn btn-success">Book Now</button></a>
                 </div>
                
              </div>
            </div>
        </div><!--end modal -->


  <!-- property end -->
  <section id="team" class="team">
    <div class="container">

      
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{asset('assets/images2/property-1.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <h5 style="color:white;">Click here fore more info</h5>
                <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#Property-1">More Info</button>
              </div>
            </div>
            <div class="member-info">
              <h4>Property Name : Emarald</h4>
              <h5>Property Code : EMD</h5>
                <p class="price">₹1,00,00,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{asset('assets/images2/property-2.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <h5 style="color:white;">Click here fore more info</h5>
                <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#Property-2">More Info</button>

              </div>
            </div>
            <div class="member-info">
              <h4>Property Name : Pearl</h4>
              <h5>Property Code : PRL</h5>
                <p class="price">₹80,00,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{asset('assets/images2/property-3.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <h5 style="color:white;">Click here fore more info</h5>
                <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#Property-3">More Info</button>
              </div>
            </div>
            <div class="member-info">
              <h4>Property Name : Ruby</h4>
              <h5>Property Code : RBY</h5>
                <p class="price">₹1,20,00,000</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{asset('assets/images2/property-4.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <h5 style="color:white;">Click here fore more info</h5>
                <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#Property-4">More Info</button>
              </div>
            </div>
            <div class="member-info">
              <h4>Property Name : Summer </h4>
              <h5>Property Code : SMR</h5>
                <p class="price">₹1,20,00,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{asset('assets/images2/property-5.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <h5 style="color:white;">Click here fore more info</h5>
                <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#Property-5">More Info</button>

              </div>
            </div>
            <div class="member-info">
              <h4>Property Name : Oasis Estates</h4>
              <h5>Property Code : OSS</h5>
                <p class="price">₹1,50,00,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{asset('assets/images2/property-7.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <h5 style="color:white;">Click here fore more info</h5>
                <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#Property-6">More Info</button>
              </div>
            </div>
            <div class="member-info">
              <h4>Property Name : Rolex</h4>
              <h5>Property Code : RLX</h5>
                <p class="price">₹1,80,00,000</p>
            </div>
          </div>
        </div>

      </div>
      

    </div>
  </section><!-- End Team Section -->
  <!-- Contact form -->
        
<section id="contact_form">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Do you have any questions</h2>
        <h2 class="second_heading">Feel free to contact us!</h2>
    </div>
    <form method="post" action="{{route('contact')}}"  role="form" class="form-inline text-right col-lg-12">
    @csrf

    @method('PUT')

      @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif

      @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif

    
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="msg" placeholder="Message" name="msg" required></textarea>
        </div>
        <button type="submit" class="btn submit_btn" name="submit">Submit</button>
    </form>				
  </div>
  </div>
</section> 
<!-- Contact form end -->






@endsection