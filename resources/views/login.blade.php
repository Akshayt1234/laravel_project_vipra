<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{asset('login_assets/img/CONSTRUCTION NEW.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('login_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('login_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('login_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('login_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('login_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('login_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('login_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('login_assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <!-- ============================================================== -->
                           <!-- Modal -->
<!-- ============================================================== -->

        <!-- Modal start -->
        <div class="modal fade" id="Forgot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="card mb-0 border-0 shadow-none mb-0">
                    <div class="card-body p-sm-5 m-lg-4">
                      <div class="text-center mt-2">
                        <h5 class="fs-3xl">Forgot Password?</h5>
                          <p class="text-muted mb-4">Reset password with Vipra Home's</p>
                          <div class="pb-4">
                          <img src="{{url('dashassets/images/email.png')}}" alt="" class="avatar-md">
                            </div>
                          </div>

                          <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                            Enter your email and instructions will be sent to you!
                          </div>
                          <div class="p-2">
                              <form>
                                  <div class="mb-4">
                                     <label class="form-label">Email</label>
                                     <input type="email" class="form-control password-input" id="email" placeholder="Enter Email" required >
                                 </div>

                                  <div class="text-center mt-4">
                                     <button class="btn btn-primary w-100" type="submit">Send Reset Link</button>
                                 </div>
                             </form><!-- end form -->
                         </div>
                          <div class="mt-4 text-center">
                             <p class="mb-0">Wait, I remember my password... <a href="{{url('login')}}" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                         </div>
                     </div><!-- end card body -->
                 </div><!-- end card -->
             </div>
             <!--end col-->
                </div>
                
            </div>
            
        </div>
        <!--end modal -->

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{url('/')}}" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('login_assets/img/CONSTRUCTION NEW.png')}}" alt="">
                  <span class="d-none d-lg-block">Vipra Homes</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="{{route('loginUser')}}" method="post" class="row g-3 needs-validation">

                  @csrf
                  
                  @if(Session::has('success'))
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                      <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif


                    <div class="col-12">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="" value="{{old('email')}}">
                      <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="">
                      <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                      </span>
                      <div class="float-end mt-1">
                        <a href="#" class="badge  text-danger" data-bs-toggle="modal" data-bs-target="#Forgot">Forgot password?</a> 
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="" required>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                        <div class="invalid-feedback">Click here to remember your email and password</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <a href="{{url('/')}}"><button class="btn btn-success w-100" type="button">Go back to Home Page</button></a>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{url('register')}}">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="{{url('/')}}">Vipra Homes</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('login_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('login_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('login_assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('login_assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('login_assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('login_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('login_assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('login_assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('login_assets/js/main.js')}}"></script>

</body>

</html>