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
                    <a href="{{route('Front.Pages.terms')}}" class="text-decoration-none text-dark">
                        <i class="bi bi-text-left text-danger"></i>
                        Terms & Conditions
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb section end -->

    <!-- terms & conditions section start -->
    <div class="container-fluid p-0 my-3 bg-light">
        <div class="col p-2">
            <div class="h3 text-center display-1">Terms & Conditions</div>
        </div>
    </div>
    <!-- terms & conditions section end -->


@endsection
