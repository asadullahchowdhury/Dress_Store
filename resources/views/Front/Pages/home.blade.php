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
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- slide section start -->
    <div class="container-fluid p-0 my-3">
        <div class="slider owl-carousel owl-theme">
            <div class="col">
                <img src="/images/slide-1.jpg" class="img-fluid">
            </div>
            <div class="col">
                <img src="images/slide-2.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
    <!-- slide section end -->

    <!-- box section start -->
    <div class="container-fluid  my-3 text-center text-dark">
        <div class="row row-cols-md-4 row-cols-2 fw-bold p-2">
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-truck icon-size text-danger"></i>
                    <br>
                    Fast Shipping
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-telephone icon-size text-danger"></i>
                    <br>
                    24/7 time Support
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-arrow-return-left icon-size text-danger"></i>
                    <br>
                    Return under 10days
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-credit-card icon-size text-danger"></i>
                    <br>
                    Secure Payment
                </div>
            </div>
        </div>
    </div>
    <!-- box section end -->

    <!-- recent add product section start -->
    <div class="container-fluid my-3">
        <div class="text-center">
            <div class="h3 fw-bold text-danger py-3"> Recent Added Product</div>
        </div>
        <div class="row row-cols-md-4 row-cols-2">
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-01.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-02.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-03.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-04.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-05.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-06.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-07.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-08.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent add product section end -->

    <!-- category section start -->
    <div class="container-fluid text-center  my-3">
        <div class="row">
            <div class="col-md-6 p-2">
                <a href="" class="text-decoration-none text-dark">
                    <img src="images/shop-now-01.jpg" class="img-fluid shadow">
                </a>
            </div>
            <div class="col-md-6 p-2">
                <a href="" class="text-decoration-none text-dark">
                    <img src="images/shop-now-04.jpg" class="img-fluid shadow">
                </a>
            </div>
            <div class="col-md-6 p-2">
                <a href="" class="text-decoration-none text-dark">
                    <img src="images/shop-now-02.jpg" class="img-fluid shadow">
                </a>
            </div>
            <div class="col-md-6 p-2">
                <a href="" class="text-decoration-none text-dark">
                    <img src="images/shop-now-03.jpg" class="img-fluid shadow">
                </a>
            </div>
        </div>
    </div>
    <!-- category section end -->

    <!-- banner section start -->
    <div class="container-fluid p-0 my-3">
        <div class="mb-0 position-relative text-end">
            <img src="images/banner-1.jpg" class="img-fluid shadow">
            <div class="position-absolute top-50 end-0 translate-middle-y p-md-5 p-3">
                <div class="h3 fw-bold">All Products</div>
                <br>
                <a href="" class="btn btn-sm btn-success">Discover Now</a>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <!-- recent add product section start -->
    <div class="container-fluid  my-3">
        <div class="text-center">
            <div class="h3 text-danger fw-bold py-3"> Comming Soon These Product</div>
        </div>
        <div class="row row-cols-md-4 row-cols-2">
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-09.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-10.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-11.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-17.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-12.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-13.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-14.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 text-center">
                    <img src="images/dress-15.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-3 btn btn-sm btn-danger">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-3 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent add product section end -->

    <!-- brand section start -->
    <div class="container-fluid my-3">
        <div class="text-center">
            <div class="h3 text-danger fw-bold py-3"> Brand Collection</div>
        </div>
        <div class="brand owl-carousel owl-theme">
            <div class="col p-2 border">
                <img src="images/brand-1.jpg" class="img-fluid">
            </div>
            <div class="col p-2 border">
                <img src="images/brand-2.jpg" class="img-fluid">
            </div>
            <div class="col p-2 border">
                <img src="images/brand-3.jpg" class="img-fluid">
            </div>
            <div class="col p-2 border">
                <img src="images/brand-4.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- brand section end -->

@endsection
