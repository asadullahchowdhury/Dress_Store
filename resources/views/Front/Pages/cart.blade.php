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
                    <a href="{{route('Front.Pages.cart')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-cart text-danger"></i>
                        Cart Details
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- cart details section start -->
    <div class="container-fluid bg-light my-3">
        <div class="col p-3">
            <div class="row">
                <div class="col-md-8 py-3">
                    <div class="row fw-bold text-md-center text-danger">
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
                                    Price * Quantity
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white">
                                    Subtotal
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white">
                                    Action
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
                                    1,00,000 tk * 1
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    1,00,000
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    <a href="" class="text-decoration-none text-danger badge">Delete</a>
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
                                    2,00,000 tk * 2
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    4,00,000
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    <a href="" class="text-decoration-none text-danger badge">Delete</a>
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
                                    3,00,000 tk * 3
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    9,00,000
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    <a href="" class="text-decoration-none text-danger badge">Delete</a>
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
                                    4,00,000 tk * 4
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    16,00,000
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    <a href="" class="text-decoration-none text-danger badge">Delete</a>
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
                                    5,00,000 tk * 5
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    25,00,000
                                </div>
                                <div class="col-4 border border-dark p-1 bg-white text-md-center">
                                    <a href="" class="text-decoration-none text-danger badge">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row fw-bold text-danger">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12 border border-dark p-1 bg-white text-md-end">
                                    Total SubTotal
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12 border border-dark p-1 bg-white text-md-center">
                                    25,00,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row px-3 fw-bold text-danger">
                        <div class="col-8 p-1 border border-dark text-md-center bg-white">Description</div>
                        <div class="col-4 p-1 border border-dark text-md-center bg-white">Amount</div>
                    </div>
                    <div class="row px-3 fw-bold">
                        <div class="col-8 p-1 border border-dark text-md-center bg-white">Total Subtotal</div>
                        <div class="col-4 p-1 border border-dark text-md-center bg-white">55,00,000</div>
                    </div>
                    <div class="row px-3 fw-bold">
                        <div class="col-8 p-1 border border-dark text-md-center bg-white">Shipping Charge</div>
                        <div class="col-4 p-1 border border-dark text-md-center bg-white">10,000</div>
                    </div>
                    <div class="row px-3 fw-bold">
                        <div class="col-8 p-1 border border-dark text-md-center bg-white">15% Discount ( <span
                                class="badge bg-danger">10</span> Items )
                        </div>
                        <div class="col-4 p-1 border border-dark text-md-center bg-white">0</div>
                    </div>
                    <div class="row px-3 fw-bold text-danger">
                        <div class="col-8 p-1 border border-dark text-md-center bg-white">Total Payment</div>
                        <div class="col-4 p-1 border border-dark text-md-center bg-white">55,10,000</div>
                    </div>
                    <div class="row px-3">
                        <div class="col-12 py-3 border border-dark text-md-center bg-white">
                            <a href="{{route('Front.Pages.checkout')}}" class="btn btn-sm btn-danger">Order Procced</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart details section end -->

    <!-- random product section start -->
    <div class="container-fluid p-0 my-3">
        <div class="h3 py-2 border-bottom border-danger text-danger fw-bold">Most Sell & Recommended Product:</div>
        <div class="product owl-carousel owl-theme">
            <div class="col">
                <img src="images/dress-04.jpg" class="img-fluid">
                <div class="row justify-content-around p-2">
                    <a href="" class="col-4 btn btn-sm btn-danger">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a href="" class="col-4 btn btn-sm btn-secondary">
                        <i class="bi bi-card-text"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <img src="images/dress-05.jpg" class="img-fluid">
                <div class="row justify-content-around p-2">
                    <a href="" class="col-4 btn btn-sm btn-danger">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a href="" class="col-4 btn btn-sm btn-secondary">
                        <i class="bi bi-card-text"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <img src="images/dress-06.jpg" class="img-fluid">
                <div class="row justify-content-around p-2">
                    <a href="" class="col-4 btn btn-sm btn-danger">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a href="" class="col-4 btn btn-sm btn-secondary">
                        <i class="bi bi-card-text"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <img src="images/dress-07.jpg" class="img-fluid">
                <div class="row justify-content-around p-2">
                    <a href="" class="col-4 btn btn-sm btn-danger">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a href="" class="col-4 btn btn-sm btn-secondary">
                        <i class="bi bi-card-text"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- random product section end -->

@endsection
