@extends('Front.Layout.layout')
@section('content')

    <!-- breadcrumb section start -->
    <div class="container-fluid p-0 my-3">
        <div class="section-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  p-2 fw-bold">
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.home')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-house-door text-theme"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('Front.Pages.privacy')}}" class="text-decoration-none text-dark">
                            <i class="bi bi-text-left text-theme"></i>
                            Privacy & Policy
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb section end -->

    <!-- terms & conditions section start -->
    <div class="container-fluid my-3">
        <div class="col p-2">
            <div class=" text-center h3">Pivacy & policy</div>
        </div>
    </div>
    <!-- terms & conditions section end -->

@endsection
