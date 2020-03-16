<?php

namespace App\Http\Controllers\Frontend;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriversController extends Controller
{
    public function register()
    {
        return view('frontend.auth.driver.register');
    }

    public function login()
    {
        return view('frontend.auth.driver.login');
    }
}
