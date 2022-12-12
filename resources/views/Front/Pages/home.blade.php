@extends('Front.Layout.layout')
@section('content')

    <!-- slide section start -->
    <div class="container-fluid p-0 ">
        <div class="slider owl-carousel owl-theme">
            <div class="col" style="max-height: 560px">
                <img src="/images/slide-1.jpg" class="img-fluid">
            </div>
            <div class="col" style="max-height: 560px">
                <img src="images/slide-2.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
    <!-- slide section end -->

    <!-- box section start -->
    <div class="container-fluid  text-center text-dark">
        <div class="row row-cols-md-4 row-cols-2 fw-bold p-2">
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-truck icon-size text-theme"></i>
                    <br>
                    Fast Shipping
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-telephone icon-size text-theme"></i>
                    <br>
                    24/7 time Support
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-arrow-return-left icon-size text-theme"></i>
                    <br>
                    Return under 10days
                </div>
            </div>
            <div class="col p-2">
                <div class="col p-2 border border-danger bg-light rounded">
                    <i class="bi bi-credit-card icon-size text-theme"></i>
                    <br>
                    Secure Payment
                </div>
            </div>
        </div>
    </div>
    <!-- box section end -->
    <br>
    <!-- recent add product section start -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <div class="section-header">
                <div class="text-start border-theme border-bottom">
                    <div class="h3 fw-bold text-theme "> Recent Added</div>
                </div>
            </div>
            <div class="row row-cols-md-4 row-cols-2">
                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-01.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">$100</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-02.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price"> $49</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-03.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">$36</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-04.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">$49</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-05.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">$70</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-06.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price"> $49</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-07.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">$36</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-08.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">$49</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent add product section end -->

    <!-- category section start -->
    <div class="container-fluid text-center  my-3">
        <div class="section-container">
            <div class="row">
                <div class="col-md-6 p-2">
                    <a href="" class="text-decoration-none text-dark d-block cat-max-h-600">
                        <img src="images/shop-now-01.jpg" class="img-fluid shadow">
                    </a>
                </div>
                <div class="col-md-6 p-2">
                    <a href="" class="text-decoration-none text-dark d-block cat-max-h-600">
                        <img src="images/shop-now-04.jpg" class="img-fluid shadow">
                    </a>
                </div>
                <div class="col-md-6 p-2">
                    <a href="" class="text-decoration-none text-dark d-block cat-max-h-600">
                        <img src="images/shop-now-02.jpg" class="img-fluid shadow">
                    </a>
                </div>
                <div class="col-md-6 p-2">
                    <a href="" class="text-decoration-none text-dark d-block cat-max-h-600">
                        <img src="images/shop-now-03.jpg" class="img-fluid shadow">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- category section end -->

    <!-- banner section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <div class="mb-0 position-relative text-end">
                <img src="images/banner-1.jpg" class="img-fluid shadow">
                <div class="position-absolute top-50 translate-middle-y p-md-5 p-3" style="left: 60%">
                    <div class="h3 fw-bold">All Products</div>
                    <br>
                    <a href="" class="btn btn-sm btn-success w-100">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <br>
    <!-- recent add product section start -->
    <div class="container-fluid  my-3">
        <div class="section-container">
            <div class="section-header ">
                <div class="text-start border-theme border-bottom">
                    <div class="h3 text-theme fw-bold"> Coming Soon</div>
                </div>
            </div>
            <div class="row row-cols-md-4 row-cols-2">
                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-09.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-10.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price"> TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-11.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-17.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-16.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row d-flex justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-14.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price"> TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-12.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 text-center">
                        <div class="product-img-wrapper">
                            <img src="images/dress-13.jpg" class="img-fluid product-img">
                        </div>
                        <div class="row justify-content-between p-2">
                            <div class="col-3">
                                <h5 class="price">TBA</h5>
                            </div>
                            <div class="each-btn col-9 text-end">
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="javascript:void(0)" class="col-3 btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- recent add product section end -->

    <!-- brand section start -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <div class="text-center">
                <div class="h3 text-theme fw-bold py-3"> Brand Collection</div>
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
    </div>
    <!-- brand section end -->

@endsection
