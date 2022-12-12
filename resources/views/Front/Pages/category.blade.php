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
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->

    <div class="container-fluid">
        <div class="section-container">
            <div class="category-bar bg-light p-2 rounded-3">
                <div class="category-title">Denim</div>
                <div class="filter d-flex">
                    <label class="d-flex" for="show">Show:
                        <select id="show" class="form-select" aria-label="Default select example">
                            <option selected>20</option>
                            <option value="1">50</option>
                            <option value="2">100</option>
                            <option value="3">200</option>
                        </select>
                    </label>
                    <label class="d-flex" for="sort">Sort by:   </label>
                        <select id="" class=" ml-2 form-select" aria-label="Default select example">
                            <option selected>Default</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                </div>
            </div>
        </div>
    </div>
    <!-- category product section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <div class="row row-cols-md-4 row-cols-2">
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-01.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex justify-content-between p-2">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-02.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-03.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-04.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-05.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-06.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-07.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="col p-2 ">
                        <div class="product-img-wrapper">
                            <img src="images/dress-08.jpg" class="img-fluid product-img">
                        </div>

                        <div class="d-flex p-2 justify-content-between">
                            <div class="h3 fw-bold text-dark">$50</div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-theme">
                                    <i class="bi bi-cart"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination section start -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center fw-bold">
                <li class="page-item">
                    <a class="page-link">
                        <i class="bi bi-caret-left-fill"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">
                        <i class="bi bi-caret-right-fill"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- pagination section end -->
    </div>
    <!-- category product section end -->
@endsection
