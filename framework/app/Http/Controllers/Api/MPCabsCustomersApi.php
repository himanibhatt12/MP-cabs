<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\CouponModel;
use App\Model\PackagesModel;
use App\Model\RideOffers;
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
            $details[] = array(
                'vehicle_make' => $package->vehicle->maker->make,
                'vehicle_model' => $package->vehicle->vehiclemodel->model,
                'vehicle_plate' => $package->vehicle->license_plate,
                'hourly_rate' => $package->hourly_rate,
                'km_rate' => $package->km_rate,
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
                'source' => $offer->source,
                'destination' => $offer->destination,
                'valid_till' => date('d-m-Y g:i A', strtotime($offer->valid_till)),
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
            'vehicletype' => 'required|exists:vehicle_types,vehicletype,vehicletype,' . $request->vehicletype,
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $km_base = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_km');
            if ($request->total_kms <= $km_base) {
                $total_fare = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_fare');

            } else {
                $total_fare = Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_fare') + (($request->total_kms - $km_base) * Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_std_fare'));
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
                'tax_total' => $tax_total,
                'total_tax_percent' => $total_tax_percent,
                'total_tax_charge_rs' => $total_tax_charge_rs,
                'ride_amount' => $total_fare,
                'base_fare' => Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_fare'),
                'base_km' => Hyvikk::fare(strtolower(str_replace(' ', '', $request->vehicletype)) . '_base_km'),
            );
        }
        return $data;
    }
}
