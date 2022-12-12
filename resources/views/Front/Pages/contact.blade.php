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
                        <a href="{{route('Front.Pages.contact')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-telephone text-theme"></i>
                            Contact Us
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->

    <!-- contact us section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <div class="row justify-content-around  p-3 p-md-5">
                <div class="col-md-6">
                    <form action="" method="post" class=" contact-us-form px-5 ">
                        <div class="mb-3 h3 text-start"> Contact Us</div>
                        <div class="mb-3">
                            <label class="form-label">Name: </label>
                            <input type="text" name="" class="form-control shadow-none" placeholder="Enter your name"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Email Address:</label>
                            <input type="text" name="" class="form-control shadow-none"
                                   placeholder="Enter email address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number:</label>
                            <input type="text" name="" placeholder="Phone number" class="form-control shadow-none"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Message:</label>
                            <textarea name="" placeholder="Write your message" class="form-control shadow-none"
                                      cols="30" rows="5" required style="height: 100px"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class=" w-100 btn mt-3 btn-theme">
                                Contact Us
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 fw-bold text-theme">
                    <div class="p-2"> Dress <span class="text-dark">Store</span></div>
                    <div class="p-2"><i class="bi bi-geo-alt text-dark"></i> Dhanmondi, Dhaka - 1209, Bangladesh</div>
                    <div class="p-2"><i class="bi bi-telephone text-dark"></i> 01645820007</div>
                    <div class="p-2"><i class="bi bi-envelope text-dark"></i> dressstore<span
                            class="text-dark">@gmail</span>.com
                    </div>
                    <div class="row row-cols-md-2 row-cols-2 fw-bold p-2 text-center">
                        <div class="col p-2">
                            <div class="col p-2 border border-theme bars rounded ">
                                <i class="bi bi-truck icon-size"></i>
                                <br>
                                Fast Shipping
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="col p-2 border border-theme bars rounded ">
                                <i class="bi bi-telephone icon-size"></i>
                                <br>
                                24/7 time Support
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="col p-2 border border-theme bars rounded ">
                                <i class="bi bi-arrow-return-left icon-size"></i>
                                <br>
                                Return under 10days
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="col p-2 border border-theme bars rounded ">
                                <i class="bi bi-credit-card icon-size"></i>
                                <br>
                                Secure Payment
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- contact us section end -->

@endsection
