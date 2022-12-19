<!-- header section start -->
<div class="container-fluid bg-light border-bottom">
    <div class="section-container">
        <div class="d-none d-lg-block fs-12">
            <div class="row bg-light">
                <div class="col-md-6 p-2 text-start text-dark">
                    <span class="px-3"> 15% Discount of </span> <span class="border-start px-3"> above <span
                            class="badge bg-theme"> 10 </span> items </span>
                </div>
                <div class="col-md-6 p-2 text-end">
                    <a href="{{route('Front.Pages.cart')}}" class="text-decoration-none text-dark px-3 border-end">
                        <i class="bi bi-cart text-theme"></i>
                        Cart Details
                        <span class="badge bg-theme">1</span>
                    </a>
                    <a href="{{route('Front.Pages.contact')}}" class="text-decoration-none text-dark px-3">
                        <i class="bi bi-telephone text-theme"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="section-container">
        <div class=" row py-2 align-items-center text-center ">
            <div class="col-lg-3 col-md-3 col-sm-4 col-4">
                <div class="h3 brand-name fw-bold text-start">
                    <a href="{{route('Front.Pages.home')}}" class="text-decoration-none">
                        <span class="text-theme">Dress</span> <span class="text-dark">Store</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-9 col-md-8 col-8">
                <form action="" method="post">
                    <div class="mb-0 position-relative">
                        <input type="search" name="" class="form-control rounded-pill shadow-none p-3"
                               placeholder="Search Product here ..."
                               required>
                        <button type="submit"
                                class="mx-3 btn rounded-circle py-2 btn-theme position-absolute top-50 end-0 translate-middle-y">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 d-lg-block d-md-none  d-sm-none d-none text-end">
                <a href="#" class="btn btn-sm btn-theme">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="btn btn-sm btn-theme">
                    <i class="bi bi-messenger"></i>
                </a>
                <a href="#" class="btn btn-sm btn-theme">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="btn btn-sm btn-theme">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="btn btn-sm btn-theme">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="#" class="btn btn-sm btn-theme">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid  border bg-light">
    <div class="section-container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid ">
                <!---nav bottom--->
                <div class="nav-bottom">
                    <ul class="navbar-nav none-991 me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <i class="bi bi-justify-left text-theme"></i>
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Male
                                        Collection</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Female
                                        Collection</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Children
                                        Collection</a></li>
                                <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Accessories
                                        Collection</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <i class="bi bi-buildings text-theme"></i>
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('Front.Pages.privacy')}}">Privacy &
                                        Policy</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('Front.Pages.terms')}}">Terms &
                                        Conditions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('Front.Pages.contact')}}">
                                <i class="bi bi-telephone text-theme"></i>
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark " href="{{route('Front.Pages.cart')}}">
                                <i class="bi bi-cart text-theme"></i>
                                Cart <span class="bg-theme badge rounded-circle">1</span>
                            </a>
                        </li>
                    </ul>


                    <!---sidenav--->
                    <div class="sidebar" onclick="Sidenav()">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>

                    <nav class="sidenav outsideClick">
                        <div class="nav-header">
                            <a href="{{route('Front.Pages.home')}}" class="navbar-brand text-center fw-bold text-dark">Dress
                                <span
                                    class="text-theme"> Store</span>
                            </a>
                            <a href="javascript:void(0)" class="nav-close" onclick="Sidenav()"><i
                                    class="bi bi-x h3 text-dark"></i></a>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="" href="javascript:void (0)" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="bi bi-justify-left text-theme"></i>
                                    <span>  Category</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Male
                                            Collection</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Female
                                            Collection</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Children
                                            Collection</a></li>
                                    <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Accessories
                                            Collection</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{route('Front.Pages.cart')}}">
                                    <i class="bi bi-cart text-theme"></i>
                                    Cart <span class="badge rounded-circle bg-theme">1</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('Front.Pages.contact')}}">
                                    <i class="bi bi-telephone text-theme"></i>
                                    <span>Contact us</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void (0)">
                                    <i class="bi bi-buildings text-theme"></i>
                                    <span>About us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <ul class="navbar-nav nav-imp">
{{--                        <li class="nav-item d-block d-lg-none">--}}
{{--                            <a class="nav-link text-dark" href="{{route('Front.Pages.cart')}}">--}}
{{--                                <i class="bi bi-cart text-theme"></i>--}}
{{--                                Cart <span class="badge rounded-circle bg-theme">1</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item ">
                            <a class="nav-link text-dark d-inline-block" href="{{route('Front.Pages.login')}}">
                                <i class="bi bi-box-arrow-in-right text-theme"></i>
                                Login

                            </a>
                            or
                            <a class="nav-link text-dark d-inline-block " href="{{route('Front.Pages.register')}}">

                                <i class="bi bi-person-add text-theme"></i>
                                Registration
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</div>
<!-- header section end -->


<!--cart-->
<div class="cart-btn btn-theme  fixed-bottom " onclick="cart()">
    <span class="badge bg-dark rounded-circle  text-light">1</span>
    <i class="bi bi-cart"></i>
</div>
<!--cart nav-->
<div class="cart-nav outsideClick">
    <div class="cart-header bg-theme p-3  fw-bold text-white">
        <h5>Your cart</h5>
        <a href="javascript:void(0)" onclick="cart()">
            <i class="bi bi-x h3"></i>
        </a>
    </div>
    <div class="cart-body">
        <div class="cart-item">
            <div class="cart-img">
                <img src="/images/dress-01.jpg" alt="dress-1" class="img-fluid">
            </div>
            <div class="product-details">
                <div class="name">Money is the motive (blue)</div>
                <div class="amount">
                    <div class="price">$170</div>
                    <span><i class="bi bi-x mx-2"></i></span>
                    <span class="qty">1</span>
                    <span class="eq mx-2">=</span>
                    <div class="total">$170</div>

                </div>
            </div>
            <div class="action">
                <a href="javascript:void (0)"
                   class="btn btn-trash"><i
                        class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
    <div class="cart-footer">
        {{--        <div class="promo-code">--}}
        {{--            <div class="input-grp">--}}
        {{--                <input type="text" class="form-control shadow-none" placeholder="Promo Code">--}}
        {{--                <a href="javascript:void(0)" class=" ms-3 btn-outline-theme px-4 btn">Apply</a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="total">
            <div class="title">Sub-total :</div>
            <div class="amount fw-bold">170$</div>
        </div>
        <div class="total">
            <div class="title">Total :</div>
            <div class="amount fw-bold">170$</div>
        </div>
        <div class="checkout">
            <a href="{{route('Front.Pages.cart')}}" class="btn btn-theme py-3 w-100">Checkout</a>
        </div>
    </div>
</div>
