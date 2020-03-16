<?php

namespace App\Http\Controllers\Frontend;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function register()
    {
        return view('frontend.auth.customer.register');
    }

    public function login()
    {
        return view('frontend.auth.customer.login');
    }
}
