@extends('admindashboard.admin_layout.main')

@push('title')
<title>Admin - User's info</title>
@endpush

@push('pannelname')
<h3>User Information</h3>
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
            <a href="{{url('admindashboard')}}" class="nav-link menu-link collapsed" role="button" aria-controls="sidebarDashboards">
                <i class="bi bi-house"></i> <span data-key="t-dashboards">Upload New Project</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_contact')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Contact Details</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_users')}}" class="nav-link menu-link active"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Users Details</span> </a>
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
        <!-- Admin Pannel -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-3 text-center">All User's</h4>
                                </div><!-- end card header -->

                                <div class="container">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="search" name="search" id="" class="form-control" placeholder="Search by name or email" value="{{$search}}"/>
                                            </div>

                                            <div class="col-sm">
                                                <button class="btn btn-primary">Search</button>
                                                <a href="{{url('admin_users')}}">
                                                   <button class="btn btn-primary" type="button">Reset</button> 
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <div class="card-body mt-3">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach ($users as $User)
                                                <tr>
                                                <th scope="row">{{$User->id}}</th>
                                                <td>{{$User->name}}</td>
                                                <td>{{$User->email}}</td>
                                                <td>{{$User->phone}}</td>
                                                <td>{{$User->role}}</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @stack('footer')
@endsection