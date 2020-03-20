<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookPackageRequest;
use App\Http\Requests\LocalBookingRequest;
use App\Http\Requests\OneWayBookingRequest;
use App\Http\Requests\RoundTripBookingRequest;
use App\Model\BookingIncome;
use App\Model\Bookings;
use App\Model\IncomeModel;
use App\Model\PackagesModel;
use Auth;

// use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book_package(BookPackageRequest $request)
    {
        dd($request->all());
        $package = PackagesModel::find($request->package_id);
        $booking = Bookings::create([
            'customer_id' => Auth::id(),
            // 'pickup_addr' => $request->pickup_address,
            // 'dest_addr' => $request->drop_address,
            // 'travellers' => $request->no_of_person,
            'status' => 0,
        ]);
        $booking->booking_option = "Rental";
        $booking->package_id = $request->package_id;
        $booking->vehicle_id = $request->vehicle_id;
        $booking->is_booked = 1; // is_booked = 0 => booking request by customer
        $booking->booking_type = 1; // 1 = book later, 0 = book now
        $booking->journey_date = date('d-m-Y', strtotime($request->journey_date));
        $booking->journey_time = date('H:i:s', strtotime($request->journey_time));

        // payment details
        $booking->setMeta([
            'customerId' => Auth::id(),
            'vehicleId' => $request->vehicle_id,
            'day' => $request->get('day'),
            'mileage' => 0,
            'waiting_time' => 0,
            'date' => date('Y-m-d'),
            'total' => $package->package_rate,
            'total_kms' => 0,
            'tax_total' => $request->tax_total,
            'total_tax_percent' => $request->total_tax_percent,
            'total_tax_charge_rs' => $request->total_tax_charge_rs,
        ]);

        $booking->mileage = 0;
        $booking->total_kms = 0;
        $booking->driving_time = $package->package_hours . "hr";
        $booking->approx_timetoreach = $package->package_hours . "hr";
        $booking->receipt = 1;
        $booking->save();

        $id = IncomeModel::create([
            "vehicle_id" => $request->vehicle_id,
            "amount" => $request->tax_total,
            "user_id" => Auth::id(),
            "date" => date('Y-m-d'),
            "mileage" => 0,
            "income_cat" => 1,
            "income_id" => $booking->id,
            "tax_percent" => $request->total_tax_percent,
            "tax_charge_rs" => $request->total_tax_charge_rs,
        ])->id;

        BookingIncome::create(['booking_id' => $booking->id, "income_id" => $id]);

        // redirect to stripe payment gateway
        return redirect('razorpay/' . $booking->id);
    }

    public function package_details($id)
    {
        $data['title'] = 'Package Details';
        $data['package'] = PackagesModel::find($id);
        return view('frontend.bookings.package', $data);
    }

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
        $booking->journey_date = date('d-m-Y');
        $booking->journey_time = date('H:i:s');
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
