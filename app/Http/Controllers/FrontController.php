<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    public function home()
    {
        return view('Front.Pages.home');
    }

    public function register()
    {
        return view('Front.Pages.register');
    }

    public function login()
    {
        return view('Front.Pages.login');
    }

    public function profile()
    {
        return view('Front.Pages.profile');
    }

    public function cart()
    {
        return view('Front.Pages.cart');
    }

    public function category()
    {
        return view('Front.Pages.category');
    }

    public function contact()
    {
        return view('Front.Pages.contact');
    }

    public function history()
    {
        return view('Front.Pages.history');
    }

    public function checkout()
    {
        return view('Front.Pages.checkout');
    }

    public function privacy()
    {
        return view('Front.Pages.privacy');
    }

    public function setting()
    {
        return view('Front.Pages.setting');
    }

    public function terms()
    {
        return view('Front.Pages.terms');
    }
}
