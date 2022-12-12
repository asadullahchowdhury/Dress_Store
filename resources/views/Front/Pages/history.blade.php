@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  p-2">
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
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.history')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-list-ul text-theme"></i>
                            Order History
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
                    <div class="col p-2 border bg-light fw-bold">
                        <div class="h4 fw-bold text-dark p-2 border-theme border-bottom">Order History</div>
                        <div class="col px-3">
                            <div class="row fw-bold text-md-center text-theme">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 border border-dark p-1 bg-white">
                                            Product Name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-4 border border-dark p-1 bg-white">
                                            Date
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white">
                                            Total Payment
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white">
                                            Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-dark fw-bold">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 border border-dark p-1 bg-white">
                                            Product Name 1
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            01.01.2025
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            1,00,000
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            <div class="text-success badge">Complete</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-dark fw-bold">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 border border-dark p-1 bg-white">
                                            Product Name 2
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            01.01.2025
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            2,00,000
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            <div class="text-warning badge">Pending</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-dark fw-bold">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 border border-dark p-1 bg-white">
                                            Product Name 3
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            01.01.2025
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            3,00,000
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            <div class="text-theme badge">Cancel</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-dark fw-bold">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 border border-dark p-1 bg-white">
                                            Product Name 4
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            01.01.2025
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            4,00,000
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            <div class="text-warning badge">Pending</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-dark fw-bold">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 border border-dark p-1 bg-white">
                                            Product Name 5
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            01.01.2025
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            5,00,000
                                        </div>
                                        <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                            <div class="text-success badge">Complete</div>
                                        </div>
                                    </div>
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
