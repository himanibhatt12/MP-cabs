<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Bookings;
use App\Model\DriverLogsModel;
use App\Model\DriverVehicleModel;
use App\Model\RideOffers;
use App\Model\User;
use App\Model\VehicleColor;
use App\Model\VehicleMake;
use App\Model\VehicleModel;
use App\Model\VehicleTypeModel;
use App\Model\Vehicle_Model;
use Hyvikk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class MPCabsDriversApi extends Controller
{
    public function tax_calculation(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'amount' => 'required|numeric',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $tax = 0;
            if (Hyvikk::get('tax_charge') != "null") {
                $taxes = json_decode(Hyvikk::get('tax_charge'), true);
                foreach ($taxes as $key => $val) {
                    $tax = $tax + $val;
                }
            }
            $total_amount = (($request->amount * $tax) / 100) + $request->amount;
            $total_tax_charge = (($request->amount * $tax) / 100);
            $data['success'] = "1";
            $data['message'] = "Data fetched!";
            $data['data'] = array(
                'ride_amount' => $request->amount,
                'total_amount' => $total_amount,
                'tax_charges' => $total_tax_charge,
                'tax' => $tax . "%",
            );
        }
        return $data;
    }

    public function vehicle_info()
    {
        $makes = VehicleMake::get();
        $make_details = array();
        foreach ($makes as $make) {
            $make_details[] = array('id' => $make->id, 'make' => $make->make);
        }

        $models = Vehicle_Model::get();
        $model_details = array();
        foreach ($models as $model) {
            $model_details[] = array("id" => $model->id, "model" => $model->model, 'make_id' => $model->make_id);
        }

        $vehicle_types = VehicleTypeModel::select('id', 'vehicletype', 'displayname', 'icon', 'seats')->where('isenable', 1)->get();

        $vehicle_type_data = array();
        foreach ($vehicle_types as $vehicle_type) {
            if ($vehicle_type->icon != null) {
                $url = asset("assets/images/" . $vehicle_type->icon);
            } else {
                $url = asset("assets/images/vehicle.jpeg");
            }
            $vehicle_type_data[] = array(
                'id' => $vehicle_type->id,
                'vehicletype' => $vehicle_type->vehicletype,
                'displayname' => $vehicle_type->displayname,
                'icon' => $url,
                'no_seats' => $vehicle_type->seats,
            );
        }

        $colors = VehicleColor::get();
        $color_details = array();
        foreach ($colors as $color) {
            $color_details[] = array('id' => $color->id, 'color' => $color->color, 'code' => $color->code);
        }

        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = array(
            'make' => $make_details,
            'models' => $model_details,
            'colors' => $color_details,
            'types' => $vehicle_type_data,
        );
        return $data;
    }

    public function single_offer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'offer_id' => 'required|integer',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $offer = RideOffers::find($request->offer_id);

            $details = array(
                'offer_id' => $offer->id,
                'distance' => $offer->distance . " kms",
                'timing' => $offer->timing,
                'source' => $offer->source,
                'destination' => $offer->destination,
                'valid_till' => date('d-m-Y h:i A', strtotime($offer->valid_till)),
                'vehicle_id' => $offer->vehicle_id,
                'vehicle_make' => $offer->vehicle->maker->make,
                'vehicle_model' => $offer->vehicle->vehiclemodel->model,
                'vehicle_number' => $offer->vehicle->license_plate,
                'base_fare' => Hyvikk::fare(strtolower(str_replace(' ', '', $offer->vehicle->types->vehicletype)) . '_base_fare'),
                'total' => $offer->total,
                'tax_total' => $offer->tax_total,
                'total_tax_percent' => $offer->total_tax_percent,
                'total_tax_charge_rs' => $offer->total_tax_charge_rs,
            );

            $data['success'] = "1";
            $data['message'] = "Data fetched!";
            $data['data'] = $details;
        }
        return $data;
    }

    public function customer_offer_requests()
    {
        $bookings = Bookings::meta()->where('bookings_meta.key', '=', 'booking_option')->where('bookings_meta.value', '=', 'offer request')->where('is_booked', 0)->get();
        $details = array();
        foreach ($bookings as $booking) {
            $details[] = array(
                'id' => $booking->id,
                'source' => $booking->pickup_addr,
                'destination' => $booking->dest_addr,
                'booking_option' => $booking->booking_option,
                'timetoreach' => $booking->approx_timetoreach,
                'amount' => $booking->tax_total,
                'total_kms' => $booking->total_kms,
                'journey_date' => $booking->journey_date,
                'journey_time' => $booking->journey_time,
                'customer_name' => $booking->customer->name,
                'customer_mobile' => $booking->customer->mobno,
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function register_driver(Request $request)
    {
        $validation = Validator::make($request->all(), [
            // 'make_id' => 'required|integer',
            // 'model_id' => 'required|integer',
            // 'type_id' => 'required|integer',
            // 'vehicle_number' => 'required|unique:vehicles,license_plate',
            // 'insurance' => 'required',
            // 'rc_book' => 'required',
            // 'driving_license' => 'required',
            // 'terms' => 'required|in:1',
            ///
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric',
            'alt_mobile' => 'required|numeric',
            'password' => 'required|same:confirm_password',
            'id_proof' => 'required',
            'gender' => 'required|integer',
            'fcm_id' => 'required',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            // $vehicle = VehicleModel::create([
            //     'make_id' => $request->make_id,
            //     'model_id' => $request->model_id,
            //     'type_id' => $request->type_id,
            //     'license_plate' => $request->vehicle_number,
            //     'in_service' => 1,
            //     'color_id' => $request->color_id,
            //     // 'user_id' => $user->id,
            // ]);
            // if ($request->file('insurance') && $request->file('insurance')->isValid()) {
            //     $this->upload_vehicle_doc($request->file('insurance'), 'insurance', $vehicle->id);
            // }
            // if ($request->file('rc_book') && $request->file('rc_book')->isValid()) {
            //     $this->upload_vehicle_doc($request->file('rc_book'), 'rc_book', $vehicle->id);
            // }
            // if ($request->file('permit') && $request->file('permit')->isValid()) {
            //     $this->upload_vehicle_doc($request->file('permit'), 'permit', $vehicle->id);
            // }
            // if ($request->file('vehicle_fitness') && $request->file('vehicle_fitness')->isValid()) {
            //     $this->upload_vehicle_doc($request->file('vehicle_fitness'), 'vehicle_fitness', $vehicle->id);
            // }
            // $vehicle_id = $vehicle->id;

            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "user_type" => "D",
                'api_token' => str_random(60),
            ]);

            $user->gender = $request->gender;
            $user->phone = $request->mobile;
            $user->fcm_id = $request->fcm_id;
            $user->device_token = $request->device_token;
            $user->alt_mobile = $request->alt_mobile;
            if ($request->mode == '1') {
                $mode = 'android';
            } else {
                $mode = 'ios';
            }
            $user->mode = $mode;
            // $user->vehicle_id = $vehicle_id;
            $user->save();

            // if ($request->file('driving_license') && $request->file('driving_license')->isValid()) {
            //     $this->upload_user_file($request->file('driving_license'), "license_image", $user->id);
            // }
            if ($request->file('id_proof')) {
                $this->upload_user_file($request->file('id_proof'), "id_proof", $user->id);
            }

            // $vehicle = VehicleModel::find($vehicle_id);
            // $vehicle->driver_id = $user->id;
            // $vehicle->save();
            // DriverLogsModel::create(['driver_id' => $user->id, 'vehicle_id' => $vehicle_id, 'date' => date('Y-m-d H:i:s')]);
            // DriverVehicleModel::updateOrCreate(['vehicle_id' => $vehicle_id], ['vehicle_id' => $vehicle_id, 'driver_id' => $user->id]);
            $data['success'] = "1";
            $data['message'] = "Driver registered successfully!";
            $data['data'] = array(
                'driver_id' => $user->id,
                // 'vehicle_id' => $vehicle_id,
                'api_token' => $user->api_token,
            );
        }
        return $data;
    }

    public function register_vehicle(Request $request)
    {
        $validation = Validator::make($request->all(), [
            // 'make_id' => 'required_if:vehicle_id,|integer|nullable',
            // 'model_id' => 'required_if:vehicle_id,|integer|nullable',
            // 'type_id' => 'required_if:vehicle_id,|integer|nullable',
            // 'color_id' => 'required_if:vehicle_id,|integer|nullable',
            // 'vehicle_number' => 'required_if:vehicle_id,|unique:vehicles,license_plate|nullable',

            // 'vehicle_id' => 'required_if:make_id,|integer|nullable',
            // 'insurance' => 'required',
            // 'rc_book' => 'required',
            // 'driving_license' => 'required',
            // 'terms' => 'required|in:1',
            ////////////////////
            'make_id' => 'required|integer',
            'driver_id' => 'required|integer',
            'model_id' => 'required|integer',
            'type_id' => 'required|integer',
            'color_id' => 'required|integer',
            'vehicle_number' => 'required|unique:vehicles,license_plate',

            // merge with vehicle document
            'insurance' => 'required',
            'rc_book' => 'required',
            'driving_license' => 'required',
            'terms' => 'required|in:1',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            if ($request->vehicle_id == null) {
                $vehicle = VehicleModel::create([
                    'make_id' => $request->make_id,
                    'model_id' => $request->model_id,
                    'type_id' => $request->type_id,
                    'license_plate' => $request->vehicle_number,
                    'in_service' => 1,
                    'color_id' => $request->color_id,
                    // 'user_id' => $user->id,
                ]);
                // if ($request->file('insurance') && $request->file('insurance')->isValid()) {
                //     $this->upload_vehicle_doc($request->file('insurance'), 'insurance', $vehicle->id);
                // }
                // if ($request->file('rc_book') && $request->file('rc_book')->isValid()) {
                //     $this->upload_vehicle_doc($request->file('rc_book'), 'rc_book', $vehicle->id);
                // }
                // if ($request->file('permit') && $request->file('permit')->isValid()) {
                //     $this->upload_vehicle_doc($request->file('permit'), 'permit', $vehicle->id);
                // }
                // if ($request->file('vehicle_fitness') && $request->file('vehicle_fitness')->isValid()) {
                //     $this->upload_vehicle_doc($request->file('vehicle_fitness'), 'vehicle_fitness', $vehicle->id);
                // }
                $vehicle_id = $vehicle->id;
            } else {
                $vehicle_id = $request->vehicle_id;
            }
            $user = User::find($request->driver_id);
            $user->vehicle_id = $vehicle_id;
            $user->save();

            // if ($request->file('driving_license') && $request->file('driving_license')->isValid()) {
            //     $this->upload_user_file($request->file('driving_license'), "license_image", $user->id);
            // }

            $vehicle = VehicleModel::find($vehicle_id);
            $vehicle->driver_id = $user->id;
            $vehicle->save();
            DriverLogsModel::create(['driver_id' => $user->id, 'vehicle_id' => $vehicle_id, 'date' => date('Y-m-d H:i:s')]);
            DriverVehicleModel::updateOrCreate(['vehicle_id' => $vehicle_id], ['vehicle_id' => $vehicle_id, 'driver_id' => $user->id]);

            // merge with vehicle documents
            if ($request->file('insurance') && $request->file('insurance')->isValid()) {
                $this->upload_vehicle_doc($request->file('insurance'), 'insurance', $vehicle->id);
            }
            if ($request->file('rc_book') && $request->file('rc_book')->isValid()) {
                $this->upload_vehicle_doc($request->file('rc_book'), 'rc_book', $vehicle->id);
            }
            if ($request->file('permit') && $request->file('permit')->isValid()) {
                $this->upload_vehicle_doc($request->file('permit'), 'permit', $vehicle->id);
            }
            if ($request->file('vehicle_fitness') && $request->file('vehicle_fitness')->isValid()) {
                $this->upload_vehicle_doc($request->file('vehicle_fitness'), 'vehicle_fitness', $vehicle->id);
            }
            $vehicle_id = $vehicle->id;

            $user = User::find($request->driver_id);

            if ($request->file('driving_license') && $request->file('driving_license')->isValid()) {
                $this->upload_user_file($request->file('driving_license'), "license_image", $user->id);
            }

            $data['success'] = "1";
            $data['message'] = "Vehicle registered successfully!";
            $data['data'] = array(
                'vehicle_id' => $vehicle_id,
                'driver_id' => $user->id,
                'api_token' => $user->api_token,
            );
        }
        return $data;
    }

    private function upload_vehicle_doc($file, $field, $id)
    {
        $destinationPath = './uploads'; // upload path
        $extension = $file->getClientOriginalExtension();
        $fileName1 = Str::uuid() . '.' . $extension;
        $file->move($destinationPath, $fileName1);
        $vehicle = VehicleModel::find($id);
        $vehicle->setMeta([$field => $fileName1]);
        $vehicle->save();
    }

    private function upload_user_file($file, $field, $id)
    {
        $destinationPath = './uploads'; // upload path
        $extension = $file->getClientOriginalExtension();
        $fileName1 = Str::uuid() . '.' . $extension;
        $file->move($destinationPath, $fileName1);
        $user = User::find($id);
        $user->setMeta([$field => $fileName1]);
        $user->save();
    }

    public function edit_offer(Request $request)
    {
        $validation = Validator::make($request->all(), [

            // new vehicle
            'make_id' => 'nullable|integer',
            'model_id' => 'nullable|integer',
            'type_id' => 'nullable|integer',
            'color_id' => 'nullable|integer',
            'vehicle_number' => 'nullable|unique:vehicles,license_plate',
            ///
            'user_id' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'valid_from' => 'required',
            'valid_till' => 'required',
            'id' => 'required',
            'distance' => 'required|numeric',
            'timing' => 'required',
            // charges
            'ride_amount' => 'required|numeric',
            'total' => 'required|numeric',
            'tax_percent' => 'required|numeric',
            'tax_charges' => 'required|numeric',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $user = User::find($request->user_id);

            if ($request->make_id) {
                $vehicle = VehicleModel::create([
                    'make_id' => $request->make_id,
                    'model_id' => $request->model_id,
                    'type_id' => $request->type_id,
                    'color_id' => $request->color_id,
                    'license_plate' => $request->vehicle_number,
                    'in_service' => 1,
                    'user_id' => $request->user_id,
                ]);
                $v_id = $vehicle->id;
            } else {
                $v_id = $user->vehicle_id;
            }
            $offer = RideOffers::find($request->id);

            $offer->destination = $request->destination;
            $offer->source = $request->source;
            $offer->vehicle_id = $v_id;
            $offer->valid_from = $request->valid_from;
            $offer->valid_till = $request->valid_till;
            $offer->distance = $request->distance;
            $offer->timing = $request->timing;
            $offer->total = $request->ride_amount;
            $offer->tax_total = $request->total;
            $offer->total_tax_percent = $request->tax_percent;
            $offer->total_tax_charge_rs = $request->tax_charges;
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
            // add new vehicle
            'make_id' => 'required_if:vehicle_id,|nullable|integer',
            'model_id' => 'required_if:vehicle_id,|nullable|integer',
            'type_id' => 'required_if:vehicle_id,|nullable|integer',
            'color_id' => 'required_if:vehicle_id,|nullable|integer',
            'vehicle_number' => 'required_if:vehicle_id,|nullable|unique:vehicles,license_plate',
            'vehicle_id' => 'required_if:make_id,|integer|nullable',

            'user_id' => 'required|integer',
            'source' => 'required',
            'destination' => 'required',
            'valid_from' => 'required',
            'valid_till' => 'required',
            'distance' => 'required|numeric',
            'timing' => 'required',
            // charges
            'ride_amount' => 'required|numeric',
            'total' => 'required|numeric',
            'tax_percent' => 'required|numeric',
            'tax_charges' => 'required|numeric',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            // incomplete charges (tax calculation api)
            $user = User::find($request->user_id);
            if ($request->make_id) {
                $vehicle = VehicleModel::create([
                    'make_id' => $request->make_id,
                    'model_id' => $request->model_id,
                    'type_id' => $request->type_id,
                    'color_id' => $request->color_id,
                    'user_id' => $request->user_id,
                    'license_plate' => $request->vehicle_number,
                    'in_service' => 1,
                ]);
                $v_id = $vehicle->id;
            } else {
                $v_id = $request->vehicle_id;
            }
            $offer = RideOffers::create([
                'source' => $request->source,
                'destination' => $request->destination,
                'vehicle_id' => $v_id,
                'valid_from' => $request->valid_from,
                'valid_till' => $request->valid_till,
                'user_id' => $request->user_id,
                'distance' => $request->distance,
                'timing' => $request->timing,
                'total' => $request->ride_amount,
                'tax_total' => $request->total,
                'total_tax_percent' => $request->tax_percent,
                'total_tax_charge_rs' => $request->tax_charges,
            ]);
            $data['success'] = "1";
            $data['message'] = "Ride Offer added successfully!";
            $data['data'] = array('id' => $offer->id);
        }
        return $data;
    }

    public function my_offers(Request $request)
    {
        $id = $request->id;
        $offers = RideOffers::where('valid_till', '>=', date('Y-m-d H:i:s'))->where('user_id', $id)->get();
        $details = array();
        foreach ($offers as $offer) {
            $details[] = array(
                'offer_id' => $offer->id,
                'distance' => $offer->distance,
                'timing' => $offer->timing,
                'source' => $offer->source,
                'destination' => $offer->destination,
                'valid_till' => date('d-m-Y h:i A', strtotime($offer->valid_till)),
                'vehicle_id' => $offer->vehicle_id,
                'vehicle_make' => $offer->vehicle->maker->make,
                'vehicle_model' => $offer->vehicle->vehiclemodel->model,
                'vehicle_number' => $offer->vehicle->license_plate,
                'base_fare' => Hyvikk::fare(strtolower(str_replace(' ', '', $offer->vehicle->types->vehicletype)) . '_base_fare'),
                'total' => $offer->total,
                'tax_total' => $offer->tax_total,
                'total_tax_percent' => $offer->total_tax_percent,
                'total_tax_charge_rs' => $offer->total_tax_charge_rs,
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function delete_offer(Request $request)
    {
        $id = $request->id;
        $offers = RideOffers::find($id)->delete();
        $data['success'] = "1";
        $data['message'] = "Ride offer deleted successfully!";
        $data['data'] = "";
        return $data;
    }

    // unused

    public function vehicles()
    {
        $vehicles = VehicleModel::get();
        $details = array();
        foreach ($vehicles as $vehicle) {
            if ($vehicle->driver_id == null) {
                $details[] = array(
                    'id' => $vehicle->id,
                    'name' => $vehicle->maker->make . '-' . $vehicle->vehiclemodel->model . '-' . $vehicle->license_plate,
                    'type' => $vehicle->types->displayname,
                    'company' => $vehicle->maker->make . '-' . $vehicle->vehiclemodel->model,
                    'vehicle_number' => $vehicle->license_plate,
                    'color' => $vehicle->vehiclecolor->color,
                    'color_id' => $vehicle->color_id,
                );
            }
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function types()
    {
        $vehicle_types = VehicleTypeModel::select('id', 'vehicletype', 'displayname', 'icon', 'seats')->where('isenable', 1)->get();

        $vehicle_type_data = array();
        foreach ($vehicle_types as $vehicle_type) {
            if ($vehicle_type->icon != null) {
                $url = asset("assets/images/" . $vehicle_type->icon);
            } else {
                $url = asset("assets/images/vehicle.jpeg");
            }
            $vehicle_type_data[] = array(
                'id' => $vehicle_type->id,
                'vehicletype' => $vehicle_type->vehicletype,
                'displayname' => $vehicle_type->displayname,
                'icon' => $url,
                'no_seats' => $vehicle_type->seats,
            );
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $vehicle_type_data;
        return $data;
    }

    public function colors()
    {
        $colors = VehicleColor::get();
        $details = array();
        foreach ($colors as $color) {
            $details[] = array('id' => $color->id, 'color' => $color->color, 'code' => $color->code);
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function make()
    {
        $makes = VehicleMake::get();
        $details = array();
        foreach ($makes as $make) {
            $details[] = array('id' => $make->id, 'make' => $make->make);
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function models(Request $request)
    {
        $id = $request->make_id;
        $models = Vehicle_Model::where('make_id', $id)->get();
        foreach ($models as $model) {
            $details[] = array("id" => $model->id, "model" => $model->model, 'make_id' => $id);
        }
        $data['success'] = "1";
        $data['message'] = "Data fetched!";
        $data['data'] = $details;
        return $data;
    }

    public function vehicle_document(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'vehicle_id' => 'required|integer',
            'driver_id' => 'required|integer',
            'insurance' => 'required',
            'rc_book' => 'required',
            'driving_license' => 'required',
            'terms' => 'required|in:1',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $vehicle = VehicleModel::find($request->vehicle_id);
            if ($request->file('insurance') && $request->file('insurance')->isValid()) {
                $this->upload_vehicle_doc($request->file('insurance'), 'insurance', $vehicle->id);
            }
            if ($request->file('rc_book') && $request->file('rc_book')->isValid()) {
                $this->upload_vehicle_doc($request->file('rc_book'), 'rc_book', $vehicle->id);
            }
            if ($request->file('permit') && $request->file('permit')->isValid()) {
                $this->upload_vehicle_doc($request->file('permit'), 'permit', $vehicle->id);
            }
            if ($request->file('vehicle_fitness') && $request->file('vehicle_fitness')->isValid()) {
                $this->upload_vehicle_doc($request->file('vehicle_fitness'), 'vehicle_fitness', $vehicle->id);
            }
            $vehicle_id = $vehicle->id;

            $user = User::find($request->driver_id);

            if ($request->file('driving_license') && $request->file('driving_license')->isValid()) {
                $this->upload_user_file($request->file('driving_license'), "license_image", $user->id);
            }

            $data['success'] = "1";
            $data['message'] = "Vehicle documents uploaded successfully!";
            $data['data'] = array('vehicle_id' => $vehicle_id);
        }
        return $data;
    }
}
