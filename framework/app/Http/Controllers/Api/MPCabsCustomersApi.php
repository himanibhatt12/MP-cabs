<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Address;
use App\Model\Bookings;
use App\Model\CouponModel;
use App\Model\PackagesModel;
use App\Model\RideOffers;
use App\Model\RouteModel;
use Hyvikk;
use Illuminate\Http\Request;
use Validator;

class MPCabsCustomersApi extends Controller
{
    public function packages()
    {
        $packages = PackagesModel::get();
        $details = array();
        foreach ($packages as $package) {
            if ($package->vehicle->vehicle_image != null) {
                $image = asset('uploads/' . $package->vehicle->vehicle_image);
            } else {
                $image = asset("assets/images/vehicle.jpeg");
            }

            $details[] = array(
                'package_id' => $package->id,
                'vehicle_make' => $package->vehicle->maker->make,
                'vehicle_model' => $package->vehicle->vehiclemodel->model,
                'vehicle_plate' => $package->vehicle->license_plate,
                'hourly_rate' => $package->hourly_rate,
                'km_rate' => $package->km_rate,
                'image' => $image,
                'vehicle_type' => $package->vehicle->types->displayname,
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function offers()
    {
        $offers = RideOffers::where('valid_till', '>=', date('Y-m-d H:i:s'))->get();
        $details = array();
        foreach ($offers as $offer) {
            $details[] = array(
                'offer_id' => $offer->id,
                'source' => $offer->source,
                'destination' => $offer->destination,
                'distance' => $offer->distance,
                'timing' => $offer->timing,
                'valid_till' => date('d-m-Y g:i A', strtotime($offer->valid_till)),
                'vehicle_id' => $offer->vehicle_id,
                'vehicle' => $offer->vehicle->maker->make . '-' . $offer->vehicle->vehiclemodel->model . '-' . $offer->vehicle->license_plate,
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function apply_coupon(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'coupon_code' => 'required|exists:coupons,code,code,' . $request->coupon_code,
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $coupon = CouponModel::where('code', $request->coupon_code)->first();
            if ($coupon->type == 1) {
                // percentage
                $total_amount = $request->amount - ($request->amount * $coupon->value) / 100;
                $discount_amount = (($request->amount * $coupon->value) / 100) . " %";
            } else {
                // amount
                $total_amount = $request->amount - $coupon->value;
                $discount_amount = Hyvikk::get('currency') . " " . $coupon->value;
            }
            $data['success'] = "1";
            $data['message'] = "Coupon Applied successfully!";
            $data['data'] = array('discount_amount' => $discount_amount, 'total_amount' => $total_amount);
        }
        return $data;
    }

    public function fare_calculation(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'total_kms' => 'required|numeric',
            'vehicletype' => 'nullable|exists:vehicle_types,vehicletype,vehicletype,' . $request->vehicletype,
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            if ($request->vehicletype) {
                $km_base = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_km');
                $base_fare = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_fare');
                $std_fare = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_std_fare');
                $base_km = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_km');
            } else {
                $km_base = Hyvikk::fare('base_km');
                $base_fare = Hyvikk::fare('base_fare');
                $std_fare = Hyvikk::fare('std_fare');
                $base_km = Hyvikk::fare('base_km');
            }

            if ($request->total_kms <= $km_base) {
                $total_fare = $base_fare;

            } else {
                $total_fare = $base_fare + (($request->total_kms - $km_base) * $std_fare);
            }
            // calculate tax charges
            $count = 0;
            if (Hyvikk::get('tax_charge') != "null") {
                $taxes = json_decode(Hyvikk::get('tax_charge'), true);
                foreach ($taxes as $key => $val) {
                    $count = $count + $val;
                }
            }
            $tax_total = (($total_fare * $count) / 100) + $total_fare;
            $total_tax_percent = $count;
            $total_tax_charge_rs = ($total_fare * $count) / 100;

            $data['success'] = "1";
            $data['message'] = "Fare calculated successfully!";
            $data['data'] = array(
                'total_amount' => $tax_total,
                'total_tax_percent' => $total_tax_percent,
                'total_tax_charge_rs' => $total_tax_charge_rs,
                'ride_amount' => $total_fare,
                'base_fare' => $base_fare,
                'base_km' => $base_km,
            );
        }
        return $data;
    }

    public function booking_history($id)
    {
        $bookings = Bookings::where('customer_id', $id)->where('is_booked', 1)->get();
        $details = array();
        foreach ($bookings as $booking) {
            $details[] = array(
                'id' => $booking->id,
                'source' => $booking->pickup_addr,
                'destination' => $booking->dest_addr,
                'ride_status' => $booking->ride_status,
                'booking_option' => $booking->booking_option,
                'timetoreach' => $booking->approx_timetoreach,
                'amount' => $booking->tax_total,
                'total_kms' => $booking->total_kms,
                'booked_on' => date('Y-m-d H:i:s', strtotime($booking->created_at)),
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function routes()
    {
        $routes = RouteModel::get();
        $details = array();
        foreach ($routes as $route) {
            $details[] = array(
                'id' => $route->id,
                'name' => $route->name,
                'source' => $route->source,
                'destination' => $route->destination,
                'cost' => $route->cost,
                'ratings' => $route->ratings,
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function new_booking(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'booking_option' => 'required',
            'booking_type' => 'required|integer', //0 => book now, 1 => book later
            'source' => 'required',
            'destination' => 'required',
            'user_id' => 'required|integer',
            'journey_date' => 'required',
            'journey_time' => 'required',
            'total_kms' => 'required|numeric',

        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $book = Bookings::create([
                'customer_id' => $request->user_id,
                'pickup_addr' => $request->source,
                'dest_addr' => $request->destination,
                'status' => 0,
            ]);

            // $book->source_lat = $request->source_lat;
            // $book->source_long = $request->source_long;
            // $book->dest_lat = $request->dest_lat;
            // $book->dest_long = $request->dest_long;
            $book->booking_option = $request->booking_option;
            $book->journey_date = $request->journey_date;
            $book->journey_time = $request->journey_time;
            $book->booking_type = $request->booking_type;
            $book->accept_status = 0; // 0 = yet to accept, 1 = accept
            $book->ride_status = null;
            $book->total_kms = $request->total_kms;
            $book->approx_timetoreach = $request->approx_timetoreach;
            $book->save();
            Address::updateOrCreate(['customer_id' => $request->user_id, 'address' => $request->source]);

            Address::updateOrCreate(['customer_id' => $request->customer_id, 'address' => $request->destination]);
            // send notification to drivers
            $data['success'] = "1";
            $data['message'] = "Booking added successfully!";
            $data['data'] = array('booking_id' => $book->id);
        }
        return $data;
    }

    public function request_offer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'source' => 'required',
            'destination' => 'required',
            'user_id' => 'required|integer',
            'journey_date' => 'required',
            'journey_time' => 'required',
            'amount' => 'required',
            'total_kms' => 'required|numeric',
            'approx_timetoreach' => 'required',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $booking = Bookings::create([
                'customer_id' => $request->user_id,
                'pickup_addr' => $request->source,
                'dest_addr' => $request->destination,
                'sttus' => 0,
            ]);
            $booking->booking_option = "offer request";
            $booking->journey_date = $request->journey_date;
            $booking->journey_time = $request->journey_time;
            $booking->booking_type = 1;
            $booking->accept_status = 0; // 0 = yet to accept, 1 = accept
            $booking->ride_status = null;
            $booking->total = $request->amount;
            $booking->total_kms = $request->total_kms;
            $booking->tax_total = $request->amount;
            $booking->total_tax_percent = 0;
            $booking->total_tax_charge_rs = 0;
            $booking->approx_timetoreach = $request->approx_timetoreach;
            $booking->save();
            // send notification to drivers
            $data['success'] = "1";
            $data['message'] = "Offer request send successfully!";
            $data['data'] = array('booking_id' => $booking->id);
        }
        return $data;
    }

    public function book_package(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'journey_date' => 'required',
            'journey_time' => 'required',
            'amount' => 'required|numeric',
            'package_id' => 'required|integer',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            // dd($request->all());
            $package = PackagesModel::find($request->package_id);
            $booking = Bookings::create([
                'status' => 0,
                'customer_id' => $request->user_id,
                'vehicle_id' => $package->vehicle_id,
                'pickup_addr' => $package->source,
                'dest_addr' => $package->destination,
            ]);
            $booking->journey_date = $request->journey_date;
            $booking->journey_time = $request->journey_time;
            $booking->total = $request->amount;
            $booking->package_id = $request->package_id;
            $booking->booking_option = "rental package";
            $booking->save();
            $data['success'] = "1";
            $data['message'] = "Package booked successfully!";
            $data['data'] = array('booking_id' => $booking->id);
        }
        return $data;
    }

    public function book_route(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'journey_date' => 'required',
            'journey_time' => 'required',
            'amount' => 'required|numeric',
            'route_id' => 'required|integer',
            'source' => 'required',
            'destination' => 'required',
            'total_kms' => 'required|numeric',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $route = RouteModel::find($request->route_id);
            $booking = Bookings::create([
                'customer_id' => $request->user_id,
                'pickup_addr' => $request->source,
                'dest_addr' => $request->destination,
                'status' => 0,
            ]);
            $booking->journey_date = $request->journey_date;
            $booking->journey_time = $request->journey_time;
            $booking->total_kms = $request->total_kms;
            $booking->driving_time = $request->driving_time;
            $booking->route_id = $request->route_id;
            $booking->tax_total = $request->amount;
            $booking->booking_option = "fixed route";
            $booking->save();
            $data['success'] = "1";
            $data['message'] = "Route booked successfully!";
            $data['data'] = array('booking_id' => $booking->id);
        }
        return $data;
    }

    public function booking_details($id)
    {
        $taxes = json_decode(Hyvikk::get('tax_charge'));
        $booking = Bookings::find($id);
        $tax_charge = array();
        foreach ($taxes as $key => $val) {
            $tax_charge[$key] = ($booking->total * $val) / 100;
        }
        $details = array(
            'journey_date' => $booking->journey_date,
            'journey_time' => $booking->journey_time,
            'booking_option' => $booking->booking_option,
            'total_kms' => $booking->total_kms,
            'vehicle_make' => $booking->vehicle->maker->make,
            'vehicle_model' => $booking->vehicle->vehiclemodel->model,
            'vehicle_type' => $booking->vehicle->types->displayname,
            'vehicle_color' => $booking->vehicle->vehiclecolor->color,
            'vehicle_number' => $booking->vehicle->license_plate,
            'ride_amount' => $booking->total,
            'total_amount' => $booking->tax_total,
            'taxes' => $taxes,
            'tax_charges' => $tax_charge,
        );
        $data['success'] = "1";
        $data['message'] = "Booking details fetched successfully!";
        $data['data'] = $details;
        return $data;
    }
}
