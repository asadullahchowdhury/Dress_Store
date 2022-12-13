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
                        <a href="{{route('Front.Pages.checkout')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-file-person text-theme"></i>
                            Checkout
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- breadcrumb section end -->

    <!-- order procced section start -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <div class="checkout-container">
                <div class="row">
                    <!-- Customer form-->
                    <div class="col-md-4">
                        <div class="customer-info-wrapper">
                            <div class="">
                                <h2 class="title">
                                    <span>1</span>
                                    Customer Information:
                                </h2>
                            </div>
                            <form action="" method="post" class="customer-info-form fw-bold p-2">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">First Name:</label>
                                            <input type="text" name="" class="form-control " placeholder="First name*"
                                                   required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name:</label>
                                            <input type="text" name="" class="form-control " placeholder="Last name*"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">E-mail:</label>
                                    <input type="text" name="" class="form-control " placeholder="E-mail*" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone:</label>
                                    <input type="text" name="" class="form-control " placeholder="Telephone*" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address:</label>
                                    <input type="text" name="" class="form-control " placeholder="Address*" required>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">City:</label>
                                            <input type="text" name="" class="form-control " placeholder="City*"
                                                   required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Region:</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Bangladesh</option>
                                                <option value="1">India</option>
                                                <option value="2">Pakistan</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Comment:</label>
                                    <textarea name="" class="form-control" id="" cols="10" rows="5"></textarea>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!--Delivery option-->
                    <div class="col-md-8">
                        <div class="row">
                            <!--Payment method-->
                            <div class="col-md-6 gx-5">
                                <div class="box">
                                    <h2 class="title">
                                        <span>2</span>
                                        Payment Method
                                    </h2>

                                    <p class="fw-bold">Select Payment Method</p>

                                    <label class="radio-inline">
                                        <input type="radio" name="payment_method" value="cod" checked="checked">
                                        Cash on Delivery
                                    </label>
                                    <br>

                                    <label class="radio-inline">
                                        <input type="radio" name="payment_method" value="od" checked="checked">
                                        Online Delivery
                                    </label>

                                    <br>
                                    <br>
                                    <h6 class="fw-bold">We accept :</h6>
                                    <a href="javascript:void (0)">
                                        <img
                                            src="	https://www.startech.com.bd/catalog/view/theme/starship/images/card-logo.png"
                                            alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <!--delivery method-->
                            <div class="col-md-6 gx-5">
                                <div class="box">
                                    <h2 class="title">
                                        <span>3</span>
                                        Delivery Method
                                    </h2>
                                    <p class="fw-bold">Select Delivery Method</p>
                                    <label class="radio-inline">
                                        <input type="radio" name="home-delivery" value="hd" checked="checked">
                                        Home Delivery - 60৳
                                    </label>

                                </div>
                            </div>


                            <!--order review-->
                            <div class="col-md-12 g-5">
                                <div class="box ">
                                    <h2 class="title">
                                        <span>4</span>
                                        Order Review
                                    </h2>
                                    <!--table-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr class="border-bottom border-theme">
                                                <th>Product Name</th>
                                                <th class="text-end">Price</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="border-bottom">
                                                <td class="fw-bold">Denim jacket</td>
                                                <td class="text-end">$170</td>
                                                <td class="text-end">$170</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td></td>
                                                <td class="text-end"><strong>Sub-Total:</strong></td>
                                                <td class="text-theme text-end fw-bold"> $170</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td></td>
                                                <td class="text-end"><strong>Home Delivery:</strong></td>
                                                <td class="text-theme text-end fw-bold"> $10</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td></td>
                                                <td class="text-end"><strong>Total:</strong></td>
                                                <td class="text-theme text-end fw-bold"> $180</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="checkout-final">
                                        <div class="agree-text">
                                            <input type="checkbox" class="form-check final-check">
                                            I have read and agree to the
                                            <a href="{{route('Front.Pages.terms')}}">Terms and Conditions</a>,
                                            <a href="{{route('Front.Pages.privacy')}}"> Privacy Policy </a> and <a
                                                href="javacript:void(0)">Refund</a>
                                            and <a href="{{route('Front.Pages.privacy')}}">Return Policy</a>
                                        </div>
                                        <button type="button" class="btn btn-theme px-5">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
            </div>
        </div>

    </div>
    <!-- order procced section end -->

@endsection
