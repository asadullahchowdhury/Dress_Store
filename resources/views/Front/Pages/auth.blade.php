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
                    <a href="{{route('Front.Pages.auth')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-box-arrow-in-right text-danger"></i>
                        Login
                        or
                        <i class="bi bi-person-add text-danger"></i>
                        Registration
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- login or registration section start -->
    <div class="container-fluid my-3">
        <div class="row justify-content-around align-items-center p-3 text-danger">
            <div class="col-md-5 bg-dark bg-opacity-10 fw-bold p-3 rounded border">
                <form action="" method="post">
                    <div class="h3 text-center border-danger border-bottom py-2 text-dark">
                        Login
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username or Email:</label>
                        <input type="text" name="" placeholder="Enter Username or Email"
                               class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-dark">Password</label>
                        <input type="text" name="" placeholder="Enter Password" class="form-control form-control-sm"
                               required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="LogIn" name=""
                               class="form-control form-control-sm btn btn-sm btn-danger">
                    </div>
                </form>
            </div>
            <div class="col-md-5 bg-dark bg-opacity-10 fw-bold p-3 rounded border">
                <form action="" method="post">
                    <div class="h3 text-center border-danger border-bottom py-2 text-dark">
                        Create New Account
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Full Name:</label>
                        <input type="text" name="" placeholder="Enter Full Name" class="form-control form-control-sm"
                               required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-dark">Email Address:</label>
                        <input type="text" name="" placeholder="Enter Email Address"
                               class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="text" name="" placeholder="Password" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-dark">Phone Number:</label>
                        <input type="text" name="" placeholder="Phone Number" class="form-control form-control-sm"
                               required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Present Address:</label>
                        <input type="text" name="" placeholder="Present Address" class="form-control form-control-sm"
                               required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Registration" name=""
                               class="form-control form-control-sm btn btn-sm btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login or registration section end -->

@endsection
