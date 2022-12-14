@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-2">
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.home')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-house-door text-theme"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.cart')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-cart text-theme"></i>
                            Cart Details
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->

    <!-- cart details section start -->
    <div class="container-fluid  my-3">
        <div class="section-container">
            <div class="p-3">
                <h3 class="title bold text-theme">Shopping Cart</h3>
                <div class="cart-container">
                    <div class="table-responsive">
                        <table class="table table-shopping table-borderless">
                            <thead>
                            <tr class="border-theme border-bottom">
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-bottom">
                                <td class="table-product-img">
                                    <img src="/images/dress-01.jpg" alt="dress-01" class="img-fluid">
                                </td>
                                <td class="fw-bold">Money is the motive t-shirt (blue)</td>
                                <td class="quantity">
                                    <input type="text" value="1" class="form-control d-inline-block">
                                    <a href="javascript:void (0)"><i
                                            class="bi bi-check-square ms-4 me-2  text-dark"></i></a>
                                    <a href="javascript:void (0)"><i class="bi bi-x mx-2 text-dark"></i></a>
                                </td>

                                <td class="unit-price fw-bold">$170 x 1</td>
                                <td class="t-price text-theme fw-bold"> $170</td>
                            </tr>
                            <tr class="">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="pt-3 pb-3 border-bottom"><strong>Sub-Total:</strong></td>
                                <td class="text-theme fw-bold border-bottom ">$170</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="pt-3 pb-3 border-bottom"><strong>Total:</strong></td>
                                <td class="text-theme fw-bold border-bottom">$170</td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="bottom-btn-section mt-5 mb-5">
                            <a href="{{route('Front.Pages.home')}}" type="button" class="btn btn-theme"><i class="bi bi-arrow-left mx-2"></i> Continue
                                Shopping
                            </a>
                            <button type="button" class="btn btn-theme"> Confirm Order <i
                                    class="bi bi-arrow-right mx-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart details section end -->

    <!-- random product section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <div class="h3 py-2 border-bottom border-theme text-theme fw-bold">Most Sell & Recommended Product:</div>
            <div class="product owl-carousel owl-theme">
                <div class="col">
                    <img src="images/dress-04.jpg" class="img-fluid">
                    <div class="row justify-content-around p-2">
                        <a href="" class="col-4 btn btn-sm btn-theme">
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
                        <a href="" class="col-4 btn btn-sm btn-theme">
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
                        <a href="" class="col-4 btn btn-sm btn-theme">
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
                        <a href="" class="col-4 btn btn-sm btn-theme">
                            <i class="bi bi-cart"></i>
                        </a>
                        <a href="" class="col-4 btn btn-sm btn-secondary">
                            <i class="bi bi-card-text"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- random product section end -->

@endsection
