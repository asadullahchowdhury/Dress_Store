@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border p-2 bg-light fw-bold">
                <li class="breadcrumb-item">
                    <a href="{{route('Front.Pages.home')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-house-door text-danger"></i>
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('Front.Pages.profile')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-file-earmark-person text-danger"></i>
                        Profile
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('Front.Pages.setting')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-gear text-danger"></i>
                        Settings
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- settings section start -->
    <div class="container-fluid p-0 my-3">
        <div class="row p-2">
            <div class="col-md-3">
                <div class="col p-2 border bg-light fw-bold">
                    <a href="{{route('Front.Pages.profile')}}" class="nav-link text-dark m-1 p-1">
                        <i class="bi bi-speedometer text-danger"></i>
                        Dashboard
                    </a>
                    <a href="{{route('Front.Pages.history')}}" class="nav-link text-dark m-1 p-1">
                        <i class="bi bi-cart text-danger"></i>
                        Order History
                    </a>
                    <a href="{{route('Front.Pages.setting')}}" class="nav-link text-dark m-1 p-1">
                        <i class="bi bi-gear text-danger"></i>
                        Settings
                    </a>
                    <a href="#" class="nav-link text-dark m-1 p-1">
                        <i class="bi bi-box-arrow-in-right text-danger"></i>
                        LogOut
                    </a>
                </div>
            </div>
            <div class="col-md-9 fw-bold">
                <div class="col p-2 border bg-light">
                    <div class="h4 fw-bold text-dark p-2 border-danger border-bottom">Settings</div>
                    <form action="" method="post" class="bg-light p-1">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Full Name:</label>
                                <input type="text" name="" value="Mahi Bashar Akash"
                                       class="form-control form-control-sm" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label text-danger">Email Address:</label>
                                <input type="text" name="" value="mahibashar@gmail.com"
                                       class="form-control form-control-sm" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password:</label>
                                <input type="text" name="" value="akash@54321" class="form-control form-control-sm"
                                       required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label text-danger">Phone Number:</label>
                                <input type="text" name="" value="01645820007" class="form-control form-control-sm"
                                       required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Present Address:</label>
                                <input type="text" name="" value="Dhanmondi, Dhaka - 1209, Bangladesh"
                                       class="form-control form-control-sm" required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <input type="submit" value="Edit Details"
                                       class="form-control form-control-sm btn btn-sm btn-danger">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- settings section end -->

@endsection
