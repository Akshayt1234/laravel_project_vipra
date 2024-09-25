@extends('admindashboard.admin_layout.main')

@push('title')
<title>Admin - Dashboard</title>
@endpush

@push('pannelname')
<h3>Dashboard</h3>
@endpush

@push('footer')
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Vipra Homes.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Vipra Home's
                </div>
            </div>
        </div>    
    </div>
</div>
@endpush

@push('ul')
    <ul class="navbar-nav" id="navbar-nav">

        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a href="{{route('admindashboard')}}" class="nav-link menu-link collapsed active" role="button" aria-controls="sidebarDashboards">
                <i class="bi bi-house"></i> <span data-key="t-dashboards">Upload New Project</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin_contact')}}" class="nav-link menu-link"> <i class="bi bi-chat"></i> <span data-key="t-email">Contact Details</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_users')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Users Details</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_profile')}}" class="nav-link menu-link"> <i class="bi bi-person-circle"></i> <span data-key="t-email">Profile</span> </a>
        </li>

        <li class="nav-item">
            <!-- Example logout link -->
            <a href="{{route('logout')}}" class="nav-link menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-in-left"></i> <span data-key="t-logout">Logout</span></a>

            <!-- Logout form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </li>
    </ul>
@endpush
@section('admindashboard.admin_layout.main.container')

         <!-- ============================================================== -->
                           <!-- Modal -->
        <!-- ============================================================== -->

        <!-- Modal start -->
        <div class="modal fade" id="PostAJob" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Property Card</h5>
                    </div>
                    <form action=""  method="" >
                        
                        <div class="modal-body">

                            <div class="col-12">
                                <label for="firstNameinput" class="form-label">PROPERTY NAME:</label>
                                <input type="text" name="jobname" class="form-control" placeholder="PROPERTY NAME" >
                            </div>

                            <div class="col-12">
                                <label for="firstNameinput" class="form-label">PROPERTY CODE:</label>
                                <input type="text" name="jobname" class="form-control" placeholder="PROPERTY CODE" >
                            </div>

                            <div class="col-12 mt-3">
                                <label for="lastNameinput" class="form-label">PRICE:</label>
                                <input type="text" name="discription" class="form-control" placeholder="PRICE" >
                            </div>

                            <div class="col-12 mt-3">
                               <label for="phonenumberInput" class="form-label">DISCRIPTION:</label>
                               <input type="text"  name="experience"class="form-control" placeholder="DISCRIPTION" >
                            </div>

                            <div class="col-12 mt-3">
                                <label for="emailidInput" class="form-label">UPLOAD PROPERTY PHOTO:</label>
                                <input type="file" name="workingtype" class="form-control" placeholder="UPLOAD PROPERTY PHOTO" id="emailidInput">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="address1ControlTextarea" class="form-label">COMPANY NAME:</label>
                                <input type="text" name="companyname" class="form-control" placeholder="COMPANY NAME" id="address1ControlTextarea">
                            </div>

                            <div class="col-12 mt-3">
                               <label for="address1ControlTextarea" class="form-label">LOCATION</label>
                               <input type="text" name="location" class="form-control" placeholder="LOCATION" id="address1ControlTextarea">
                            </div>
                    
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Back</button>
                                <button type="submit" class="btn btn-primary" id="add-btn">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end modal -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Welcome To Vipra Homes</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="card ribbon-box border shadow-none mb-lg-0">
                                                <div class="card-body">
                                                    <div class="ribbon ribbon-primary ribbon-shape">Upload Your New Project's</div>
                                                    <div class="mt-4"><h5 class="fs-md text-center"></h5></div>
                                                    <div class="ribbon-content text-muted mt-4">
                                                        <p class="text-center mb-0">Click on the below "UPLOAD PROJECT" button for uploading new project.
                                                        </p>
                                                    </div>
                                                    <br>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-md btn-subtle-success" data-bs-toggle="modal" data-bs-target="#PostAJob">Upload Project</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @stack('footer')
@endsection

    