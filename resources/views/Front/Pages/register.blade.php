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
                        <a href="{{route('Front.Pages.register')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-person-add text-theme"></i>
                            Registration
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->

    <!-- login or registration section start -->
    <div class="container-fluid my-3">
        <div class="section-container">
            <div class="d-flex justify-content-center">
                <div class=" register-wrapper p-3">
                    <form class="register-form" method="post">
                        <div class="h3 text-center py-2 text-dark">
                            Create New Account
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Full Name:</label>
                            <input type="text" name="" placeholder="First Name"
                                   class="form-control "
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-dark">E-mail</label>
                            <input type="text" name="" placeholder="E-mail Address"
                                   class="form-control " required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input type="password" name="" placeholder="Password" class="form-control "
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password:</label>
                            <input type="password" name="" placeholder="Confirm Password" class="form-control "
                                   required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn w-100 btn-theme">
                                Register
                            </button>
                        </div>
                        <p class="no-acc-text mb-4">
                            <span>Already have an account?</span>
                        </p>
                        <div class="acc-text">If you already have an account with us, please login at the <a
                                href="{{route('Front.Pages.login')}}">login
                                page</a>.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- login or registration section end -->

@endsection
