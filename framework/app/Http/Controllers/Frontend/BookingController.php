<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function local_booking(Request $request)
    {
        dd($request->all());
    }

    public function oneway_booking(Request $request)
    {
        dd($request->all());
    }

    public function round_trip(Request $request)
    {
        dd($request->all());
    }
}
