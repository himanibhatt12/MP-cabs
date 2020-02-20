<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\DriverLogsModel;
use App\Model\DriverVehicleModel;
use App\Model\RideOffers;
use App\Model\User;
use App\Model\VehicleColor;
use App\Model\VehicleMake;
use App\Model\VehicleModel;
use App\Model\VehicleTypeModel;
use App\Model\Vehicle_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class MPCabsDriversApi extends Controller
{
    public function register_driver(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'make_id' => 'required|integer',
            'model_id' => 'required|integer',
            'type_id' => 'required|integer',
            'color_id' => 'required|integer',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric',
            'alt_mobile' => 'required|numeric',
            'password' => 'required|same:confirm_password',
            'vehicle_number' => 'required',
            'id_proof' => 'required',
            'insurance' => 'required',
            'rc_book' => 'required',
            'driving_license' => 'required',
            'gender' => 'required|integer',
            'terms' => 'required|in:1',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $vehicle = VehicleModel::create([
                'make_id' => $request->make_id,
                'model_id' => $request->model_id,
                'color_id' => $request->color_id,
                'license_plate' => $request->vehicle_number,
                'vin' => $request->vehicle_number,
                // 'user_id' => $user->id,
                'in_service' => 1,
                'type_id' => $request->get('type_id'),
            ]);
            if ($request->file('insurance') && $request->file('insurance')->isValid()) {
                $this->upload_vehicle_doc($request->file('insurance'), 'documents', $vehicle->id);
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
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "user_type" => "D",
                'api_token' => str_random(60),
            ]);
            $name = explode(" ", $user->name);
            $user->first_name = $name[0];
            if (sizeof($name) > 1) {
                $user->last_name = $name[1];
            }
            $user->gender = $request->gender;
            $user->phone = $request->mobile;
            $user->alt_mobile = $request->alt_mobile;
            $user->vehicle_id = $vehicle->id;
            $user->save();

            if ($request->file('driving_license') && $request->file('driving_license')->isValid()) {
                $this->upload_user_file($request->file('driving_license'), "license_image", $user->id);
                // $user->id_proof_type = "License";
                // $user->save();
            }
            if ($request->file('id_proof')) {
                $this->upload_user_file($request->file('id_proof'), "id_proof", $user->id);
            }

            $vehicle = VehicleModel::find($vehicle->id);
            $vehicle->driver_id = $user->id;
            $vehicle->save();
            DriverLogsModel::create(['driver_id' => $user->id, 'vehicle_id' => $vehicle->id, 'date' => date('Y-m-d H:i:s')]);
            DriverVehicleModel::updateOrCreate(['vehicle_id' => $vehicle->id], ['vehicle_id' => $vehicle->id, 'driver_id' => $user->id]);
            $data['success'] = "1";
            $data['message'] = "Driver registered successfully!";
            $data['data'] = array(
                'vehicle_id' => $vehicle->id,
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

    public function types()
    {
        $vehicle_types = VehicleTypeModel::select('id', 'vehicletype', 'displayname', 'icon', 'seats')->where('isenable', 1)->get();

        $vehicle_type_data = array();
        foreach ($vehicle_types as $vehicle_type) {
            if ($vehicle_type->icon != null) {
                $url = $vehicle_type->icon;
            } else {
                $url = null;
            }
            $vehicle_type_data[] = array('id' => $vehicle_type->id,
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
            $details[] = array('id' => $color->id, 'color' => $color->color);
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

    public function models($id)
    {
        $models = Vehicle_Model::where('make_id', $id)->get();
        foreach ($models as $model) {
            $details[] = array("id" => $model->id, "model" => $model->model, 'make_id' => $id);
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
            'user_id' => 'required|integer',
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
                'user_id' => $request->user_id,
            ]);
            $data['success'] = "1";
            $data['message'] = "Ride Offer added successfully!";
            $data['data'] = array('id' => $offer->id);
        }
        return $data;
    }

    public function my_offers($id)
    {
        $offers = RideOffers::where('valid_till', '>=', date('Y-m-d H:i:s'))->where('user_id', $id)->get();
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

}
