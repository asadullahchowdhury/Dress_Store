@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-2  ">
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.home')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-house-door text-theme"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.login')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-box-arrow-in-right text-theme"></i>
                            Login
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->

    <!-- login section start -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <div class="d-flex justify-content-center">
                <div class="login-wrapper">
                    <div class="p-3 ">
                        <form class="login-form" method="post">
                            <div class="h3 title  fw-bold text-center mb-4 py-2 text-dark">
                                Login here
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-mail:</label>
                                <input type="text" name="" placeholder="Email Address"
                                       class="form-control shadow-none" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Password</label>
                                <input type="text" name="" placeholder="Password" class="form-control shadow-none"
                                       required>
                            </div>
                            <div class="mb-4 mt-4">
                                <button type="submit" class=" btn btn-theme w-100 bold">
                                    Login
                                </button>
                            </div>
                            <p class="no-acc-text mb-5">
                                <span>Don't have any account?</span>
                            </p>
                            <a href="{{route('Front.Pages.register')}}" type="button" class="btn btn-outline-theme w-100 mb-5">
                                Create your account
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- login section end -->

@endsection
