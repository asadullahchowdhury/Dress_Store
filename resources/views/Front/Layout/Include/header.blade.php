
<!-- header section start -->
<div class="container-fluid ">
    <div class="d-none d-lg-block fw-bold">
        <div class="row bg-light border">
            <div class="col-md-6 p-3 text-start text-dark">
                <span class="px-3"> 15% Discount of </span> <span class="border-start px-3"> above <span
                        class="badge bg-danger"> 10 </span> items </span>
            </div>
            <div class="col-md-6 p-3 text-end">
                <a href="{{route('Front.Pages.cart')}}" class="text-decoration-none text-dark px-3 border-end">
                    <i class="bi bi-cart text-danger"></i>
                    Cart Details
                    <span class="badge bg-danger">000</span>
                </a>
                <a href="{{route('Front.Pages.contact')}}" class="text-decoration-none text-dark px-3">
                    <i class="bi bi-telephone text-danger"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
    <div class="border row align-items-center text-center bg-light">
        <div class="col-md-3 d-none d-lg-block">
            <div class="h3 fw-bold">
                <a href="{{route('Front.Pages.home')}}" class="text-decoration-none">
                    <span class="text-danger">Dress</span> <span class="text-dark">Store</span>
                </a>
            </div>
        </div>
        <div class="col-md-6 p-3">
            <form action="" method="post">
                <div class="mb-0 position-relative">
                    <input type="search" name="" class="form-control p-3" placeholder="Product Search Here"
                           required>
                    <button type="submit"
                            class="mx-3 btn btn-sm btn-danger position-absolute top-50 end-0 translate-middle-y">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-3 d-none d-lg-block">
            <a href="#" class="btn btn-sm btn-danger">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-sm btn-danger">
                <i class="bi bi-messenger"></i>
            </a>
            <a href="#" class="btn btn-sm btn-danger">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="btn btn-sm btn-danger">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-sm btn-danger">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="#" class="btn btn-sm btn-danger">
                <i class="bi bi-youtube"></i>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid  border bg-light">
    <nav class="navbar navbar-expand-lg fw-bold">
        <div class="container-fluid ">
            <a class="navbar-brand d-block d-lg-none text-dark" href="{{route('Front.Pages.home')}}">
                <span class="text-danger">Dress</span> Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="bi bi-justify-left text-danger"></i>
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Male Collection</a></li>
                            <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Female Collection</a></li>
                            <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Children Collection</a></li>
                            <li><a class="dropdown-item" href="{{route('Front.Pages.category')}}">Accessories Collection</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="bi bi-buildings text-danger"></i>
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('Front.Pages.privacy')}}">Privacy & Policy</a></li>
                            <li><a class="dropdown-item" href="{{route('Front.Pages.terms')}}">Terms & Conditions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{route('Front.Pages.contact')}}">
                            <i class="bi bi-telephone text-danger"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link text-dark" href="{{route('Front.Pages.checkout')}}">
                            <i class="bi bi-cart text-danger"></i>
                            Card Details <span class="badge bg-danger">000</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{route('Front.Pages.auth')}}">
                            <i class="bi bi-box-arrow-in-right text-danger"></i>
                            Login
                            or
                            <i class="bi bi-person-add text-danger"></i>
                            Registration
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- header section end -->
