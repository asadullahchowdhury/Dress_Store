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
                        <a href="{{route('Front.Pages.category')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-justify-left text-theme"></i>
                            Category
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.category')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-justify-left text-theme"></i>
                            product
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->


    <!--product section start-->
    <div class="container-fluid">
        <div class="section-container">
            <div class="product-bar">
              <div class="share">
                  Share: <a href="javascript:void(0)"><i class="bi bi-facebook mx-2"></i></a><a href="javascript:void(0)"><i class="bi bi-instagram text-theme mx-2"></i></a>
              </div>
                <div class="wish">
                    <a href="javascript:void(0)" class="text-decoration-none text-dark" style="font-weight: 500"><i class="bi bi-bag-heart mx-2"></i> Add To Wishlist</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- product img section-->
                <div class="col-md-4 justify-content-center mt-5 mb-5">
                    <div class="product-img-wrapper d-flex ">
                        <div class="slider-product-img owl-carousel">
                            <img src="/images/dress-01.jpg" alt="dress" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- product content section-->
                <div class="col-md-5">
                    <div class="product-content-section mt-5 mb-5">
                        <h3 class="product-title fw-bold text-theme mb-3">Money motive t-shirt</h3>
                        <h6 class="Product-price fw-bold mb-3"> Price :<span class="price ms-3 fw-normal">$79</span>
                        </h6>
                        <h6 class="Product-color fw-bold mb-3"> Color :<span class="color ms-3 fw-normal">Blue</span>
                        </h6>
                        <h6 class="Product-size fw-bold mb-3"> Product Size :<span class="size ms-3 fw-normal">XL</span>
                        </h6>
                        <h6 class="Product-status fw-bold mb-3"> Product Status :<span class="status ms-3 fw-normal">Available / in stock</span>
                        </h6>

                        <button type="button" class="btn btn-outline-theme mt-3 me-2">
                            <i class="bi bi-heart me-2"></i> Add to wishlist
                        </button>
                        <button type="button" class="btn btn-outline-theme mt-3"> Purchase</button>

                        <div class="d-flex mt-5">
                            <div class="product-amount">
                                <span class="decrement" onclick="decrement()"><i
                                        class="bi bi-dash-lg h4 mb-0"></i></span>
                                <input type="text" id="number" readonly value="1"/>
                                <span class="increment" onclick="increment()" value="Increment Value">
                                <i class="bi bi-plus-lg h4 mb-0"></i>
                            </span>
                            </div>
                            <button type="button" class="btn btn-theme ms-2"> Add to Cart</button>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--product section end -->
@endsection
