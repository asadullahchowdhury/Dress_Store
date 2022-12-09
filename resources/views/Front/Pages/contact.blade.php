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
                    <a href="{{route('Front.Pages.contact')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-telephone text-danger"></i>
                        Contact Us
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- contact us section start -->
    <div class="container-fluid p-0 my-3">
        <div class="row justify-content-around bg-light p-3 p-md-5">
            <div class="col-md-6">
                <form action="" method="post"
                      class="border p-3 bg-danger bg-opacity-10 fw-bold text-danger border-danger">
                    <div class="mb-3">
                        <label class="form-label">Full <span class="text-dark">Name:</span> </label>
                        <input type="text" name="" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <span class="text-dark">Email</span> Address:</label>
                        <input type="text" name="" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subject:</label>
                        <input type="text" name="" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <span class="text-dark">Message:</span></label>
                        <textarea name="" class="form-control form-control-sm" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Sent Us" class="form-control form-control-sm btn btn-sm btn-danger">
                    </div>
                </form>
            </div>
            <div class="col-md-5 fw-bold text-danger">
                <div class="p-2"> Dress <span class="text-dark">Store</span></div>
                <div class="p-2"><i class="bi bi-geo-alt text-dark"></i> Dhanmondi, Dhaka - 1209, Bangladesh</div>
                <div class="p-2"><i class="bi bi-telephone text-dark"></i> 01645820007</div>
                <div class="p-2"><i class="bi bi-envelope text-dark"></i> dressstore<span
                        class="text-dark">@gmail</span>.com
                </div>
                <div class="row row-cols-md-2 row-cols-2 fw-bold p-2 text-center">
                    <div class="col p-2">
                        <div class="col p-2 border border-danger bg-white rounded text-dark">
                            <i class="bi bi-truck icon-size"></i>
                            <br>
                            Fast Shipping
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="col p-2 border border-danger bg-white rounded text-dark">
                            <i class="bi bi-telephone icon-size"></i>
                            <br>
                            24/7 time Support
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="col p-2 border border-danger bg-white rounded text-dark">
                            <i class="bi bi-arrow-return-left icon-size"></i>
                            <br>
                            Return under 10days
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="col p-2 border border-danger bg-white rounded text-dark">
                            <i class="bi bi-credit-card icon-size"></i>
                            <br>
                            Secure Payment
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us section end -->

@endsection
