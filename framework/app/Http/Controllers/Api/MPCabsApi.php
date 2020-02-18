<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\CouponModel;
use App\Model\PackagesModel;
use App\Model\RideOffers;
use App\Model\User;
use Hyvikk;
use Illuminate\Http\Request;
use Validator;

class MPCabsApi extends Controller
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

    public function edit_offer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'valid_from' => 'required',
            'valid_till' => 'required',
            'id' => 'required',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $user = User::find($request->user_id);
            $offer = RideOffers::find($request->id);

            $offer->destination = $request->destination;
            $offer->source = $request->source;
            $offer->vehicle_id = $user->vehicle_id;
            $offer->valid_from = $request->valid_from;
            $offer->valid_till = $request->valid_till;
            $offer->save();

            $data['success'] = "1";
            $data['message'] = "Ride Offer updated successfully!";
            $data['data'] = array('id' => $offer->id);
        }
        return $data;
    }

    public function add_offer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'user_id' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'valid_from' => 'required',
            'valid_till' => 'required',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $user = User::find($request->user_id);
            $offer = RideOffers::create([
                'source' => $request->source,
                'destination' => $request->destination,
                'vehicle_id' => $user->vehicle_id,
                'valid_from' => $request->valid_from,
                'valid_till' => $request->valid_till,
            ]);
            $data['success'] = "1";
            $data['message'] = "Ride Offer added successfully!";
            $data['data'] = array('id' => $offer->id);
        }
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
}
