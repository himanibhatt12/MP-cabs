<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocalBookingRequest;
use App\Http\Requests\OneWayBookingRequest;
// use Illuminate\Http\Request;
use App\Http\Requests\RoundTripBookingRequest;
use App\Model\Bookings;
use Auth;

class BookingController extends Controller
{
    public function local_booking(LocalBookingRequest $request)
    {
        $booking = Bookings::create([
            'customer_id' => Auth::id(),
            'pickup_addr' => $request->pickup_address,
            'dest_addr' => $request->drop_address,
            'travellers' => $request->no_of_person,
            'status' => 0,
            'note' => $request->note,
        ]);
        $booking->vehicle_typeid = $request->type_id;
        $booking->booking_option = "Local";
        $booking->is_booked = 1; // is_booked = 0 => booking request by customer
        $booking->accept_status = 0; //0=yet to accept, 1= accept
        $booking->booking_type = 0; // 1 = book later, 0 = book now
        $booking->ride_status = null;
        // $booking->journey_date = date('d-m-Y', strtotime($request->journey_date));
        // $booking->journey_time = date('H:i:s', strtotime($request->journey_time));
        $booking->save();
        return redirect('/')->with('success', 'Booking successful');
    }

    public function oneway_booking(OneWayBookingRequest $request)
    {
        $booking = Bookings::create([
            'customer_id' => Auth::id(),
            'pickup_addr' => $request->pickup_address,
            'dest_addr' => $request->drop_address,
            'travellers' => $request->no_of_person,
            'status' => 0,
            'note' => $request->note,
        ]);
        $booking->vehicle_typeid = $request->type_id;
        $booking->booking_option = "OneWay";
        $booking->is_booked = 1; // is_booked = 0 => booking request by customer
        $booking->accept_status = 0; //0=yet to accept, 1= accept
        $booking->booking_type = 1; // 1 = book later, 0 = book now
        $booking->ride_status = null;
        $booking->journey_date = date('d-m-Y', strtotime($request->journey_date));
        $booking->journey_time = date('H:i:s', strtotime($request->journey_time));
        $booking->save();
        return redirect('/')->with('success', 'Booking successful');
    }

    public function round_trip(RoundTripBookingRequest $request)
    {
        $booking = Bookings::create([
            'customer_id' => Auth::id(),
            'pickup_addr' => $request->pickup_address,
            'dest_addr' => $request->drop_address,
            'travellers' => $request->no_of_person,
            'status' => 0,
            'note' => $request->note,
        ]);
        $booking->vehicle_typeid = $request->type_id;
        $booking->booking_option = "RoundTrip";
        $booking->is_booked = 1; // is_booked = 0 => booking request by customer
        $booking->accept_status = 0; //0=yet to accept, 1= accept
        $booking->booking_type = 1; // 1 = book later, 0 = book now
        $booking->ride_status = null;
        $booking->journey_date = date('d-m-Y', strtotime($request->journey_date));
        $booking->journey_time = date('H:i:s', strtotime($request->journey_time));
        $booking->return_date = date('d-m-Y', strtotime($request->return_date));
        $booking->return_time = date('H:i:s', strtotime($request->return_time));
        $booking->save();
        return redirect('/')->with('success', 'Booking successful');
    }
}
