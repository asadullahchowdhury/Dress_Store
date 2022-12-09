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
                    <a href="{{route('Front.Pages.category')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-justify-left text-danger"></i>
                        Category
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- category product section start -->
    <div class="container-fluid p-0 my-3">
        <div class="row row-cols-md-4 row-cols-2">
            <div class="col p-2">
                <div class="col p-2 border">
                    <img src="images/dress-01.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-02.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-03.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-04.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-05.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-06.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-07.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
                <div class="col p-2 border">
                    <img src="images/dress-08.jpg" class="img-fluid">
                    <div class="position-relative">
                        <div class="h3 fw-bold text-dark p-2">$50</div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <a href="" class="btn btn-sm btn-danger">
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
        <!-- pagination section start -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center fw-bold">
                <li class="page-item">
                    <a class="page-link">
                        <i class="bi bi-caret-left-fill"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="bi bi-caret-right-fill"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- pagination section end -->
    </div>
    <!-- category product section end -->
@endsection
