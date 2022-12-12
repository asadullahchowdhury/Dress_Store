@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-2 ">
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.home')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-house-door text-theme"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.profile')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-file-earmark-person text-theme"></i>
                            Profile
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- breadcrumb section end -->

    <!-- profile section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <div class="row p-2">
                <div class="col-md-3">
                    <div class="col p-2 border bg-light fw-bold">
                        <a href="{{route('Front.Pages.profile')}}" class="nav-link text-dark m-1 p-1">
                            <i class="bi bi-speedometer text-theme me-3"></i>
                            Profile
                        </a>
                        <a href="{{route('Front.Pages.history')}}" class="nav-link text-dark m-1 p-1">
                            <i class="bi bi-cart text-theme me-3"></i>
                            Order History
                        </a>
                        <a href="{{route('Front.Pages.setting')}}" class="nav-link text-dark m-1 p-1">
                            <i class="bi bi-gear text-theme me-3"></i>
                            Settings
                        </a>
                        <a href="#" class="nav-link text-dark m-1 p-1">
                            <i class="bi bi-box-arrow-in-right text-theme me-3"></i>
                            LogOut
                        </a>
                    </div>
                </div>
                <div class="col-md-9 fw-bold">
                    <div class="col p-2 border bg-light">
                        <div class="h4 fw-bold text-dark p-2 border-theme border-bottom">Profile</div>
                        <div class="row row-cols-md-2 row-cols-1 p-2">
                            <div class="col p-2">
                                <div class="col p-2 border bg-white rounded">
                                    <div class="row">
                                        <div class="col-7">Order</div>
                                        <div class="col-5 text-end">
                                            <span class="badge bg-theme">000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-2">
                                <div class="col p-2 border bg-white rounded">
                                    <div class="row">
                                        <div class="col-7">Pending</div>
                                        <div class="col-5 text-end">
                                            <span class="badge bg-theme">000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-2">
                                <div class="col p-2 border bg-white rounded">
                                    <div class="row">
                                        <div class="col-7">Complete</div>
                                        <div class="col-5 text-end">
                                            <span class="badge bg-theme">000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-2">
                                <div class="col p-2 border bg-white rounded">
                                    <div class="row">
                                        <div class="col-7">Process</div>
                                        <div class="col-5 text-end">
                                            <span class="badge bg-theme">000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-md-2 row-cols-1 p-2">
                            <div class="col p-2">
                                <div class="col p-2 border rounded bg-white">
                                    <span class="text-theme">Full Name:</span> <br> Mahi Bashar Akash
                                </div>
                            </div>
                            <div class="col p-2">
                                <div class="col p-2 border rounded bg-white">
                                    <span class="text-theme">Email Address:</span> <br> mahibashar@gmail.com
                                </div>
                            </div>
                            <div class="col p-2">
                                <div class="col p-2 border rounded bg-white">
                                    <span class="text-theme">Phone Number:</span> <br> 01645820007
                                </div>
                            </div>
                            <div class="col p-2">
                                <div class="col p-2 border rounded bg-white">
                                    <span class="text-theme">Present Address:</span> <br> Dhanmondi, Dhaka - 1209,
                                    Bangladesh
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- profile section end -->

@endsection
