@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border p-2 bg-light fw-bold">
                <li class="breadcrumb-item">
                    <a href="{{route('Front.Pages.home')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-house-door text-theme"></i>
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('Front.Pages.checkout')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-file-person text-theme"></i>
                        Order Procced
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- order procced section start -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <div class="row px-2">
                <div class="col-md-4">
                    <div class="col bg-light p-2">
                        <div class="fw-bold text-dark pb-2 border-bottom border-theme">
                            Customer Product Delivery Details:
                        </div>
                        <form action="" method="post" class="fw-bold p-2">
                            <div class="mb-3">
                                <label class="form-label">Full Name:</label>
                                <input type="text" name="" class="form-control form-control-sm" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-theme">Email Address:</label>
                                <input type="text" name="" class="form-control form-control-sm" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number:</label>
                                <input type="text" name="" class="form-control form-control-sm" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-theme">Present Address:</label>
                                <input type="text" name="" class="form-control form-control-sm" required>
                            </div>
                            <hr>
                            <div class="col" id="payment">
                                <div class="mb-3">
                                    <label class="form-label">Card Number:</label>
                                    <input type="text" name="" placeholder="XXXX XXXX XXXX XXXX"
                                           class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-3 text-theme">
                                    <label class="form-label">CVV Number:</label>
                                    <input type="text" name="" placeholder="XXXX" class="form-control form-control-sm"
                                           required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Expiry Date:</label>
                                    <input type="date" name="" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-3 text-theme">
                                    <label class="form-label">Password:</label>
                                    <input type="text" name="" placeholder="Password" class="form-control form-control-sm"
                                           required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col bg-light p-2">
                        <div class="row px-2 fw-bold text-md-center text-dark">
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
                        <div class="row px-2 text-dark fw-bold">
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
                                        <a href="" class="text-decoration-none text-theme badge">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2 text-dark fw-bold">
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
                                        <a href="" class="text-decoration-none text-theme badge">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2 text-dark fw-bold">
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
                                        <a href="" class="text-decoration-none text-theme badge">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2 text-dark fw-bold">
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
                                        <a href="" class="text-decoration-none text-theme badge">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2 text-dark fw-bold">
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
                                        <a href="" class="text-decoration-none text-theme badge">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2 fw-bold text-theme">
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
                        <div class="col p-1">
                            <div class="row px-1 fw-bold text-theme">
                                <div class="col-8 p-1 border border-dark text-md-center bg-white">Description</div>
                                <div class="col-4 p-1 border border-dark text-md-center bg-white">Amount</div>
                            </div>
                            <div class="row px-1 fw-bold">
                                <div class="col-8 p-1 border border-dark text-md-center bg-white">Total Subtotal</div>
                                <div class="col-4 p-1 border border-dark text-md-center bg-white">55,00,000</div>
                            </div>
                            <div class="row px-1 fw-bold">
                                <div class="col-8 p-1 border border-dark text-md-center bg-white">Shipping Charge</div>
                                <div class="col-4 p-1 border border-dark text-md-center bg-white">10,000</div>
                            </div>
                            <div class="row px-1 fw-bold">
                                <div class="col-8 p-1 border border-dark text-md-center bg-white">15% Discount ( <span
                                        class="badge bg-danger">10</span> Items )
                                </div>
                                <div class="col-4 p-1 border border-dark text-md-center bg-white">0</div>
                            </div>
                            <div class="row px-1 fw-bold text-theme">
                                <div class="col-8 p-1 border border-dark text-md-center bg-white">Total Payment</div>
                                <div class="col-4 p-1 border border-dark text-md-center bg-white">55,10,000</div>
                            </div>
                        </div>
                        <a href="" class="form-control form-control-sm btn btn-sm btn-theme">
                            Order Confirm
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- order procced section end -->

@endsection
