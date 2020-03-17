<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontendDriverRegister;
use App\Http\Requests\FrontendLoginRequest;
use App\Model\DriverLogsModel;
use App\Model\DriverVehicleModel;
use App\Model\User;
use App\Model\VehicleColor;
use App\Model\VehicleMake;
use App\Model\VehicleModel;
use App\Model\VehicleTypeModel;
use Illuminate\Support\Facades\Auth as Login;
use Illuminate\Support\Str;

class DriversController extends Controller
{
    public function register()
    {
        $exclude = DriverVehicleModel::select('vehicle_id')->get('vehicle_id')->pluck('vehicle_id')->toArray();
        $data['vehicles'] = VehicleModel::whereNotIn('id', $exclude)->get();
        $data['types'] = VehicleTypeModel::where('isenable', 1)->get();
        $data['colors'] = VehicleColor::get();
        $data['makes'] = VehicleMake::get();
        // $company = array();
        // foreach ($makes as $make) {
        //     foreach ($make->models as $row) {
        //         // echo $row->model . "-" . $make->make . "<br>";
        //         $company[] = array('id' => $make->id . "_" . $row->id, 'vehicle' => $make->make . " - " . $row->model);
        //     }
        // }
        // $data['companies'] = $company;
        return view('frontend.auth.driver.register', $data);
    }

    public function login()
    {
        return view('frontend.auth.driver.login');
    }

    public function driver_login(FrontendLoginRequest $request)
    {
        if (Login::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Login::user();
            if ($user->user_type == "D") {
                $user->login_status = 1;
                $user->save();
                return redirect('/');
            } else {
                $this->guard()->logout();
                $request->session()->invalidate();
                return back()->withErrors(["error" => "Invalid login credentials"])->withInput();
            }
        } else {
            return back()->withErrors(["error" => "Invalid login credentials"])->withInput();
        }
    }

    protected function guard()
    {
        return Login::guard();
    }

    public function driver_register(FrontendDriverRegister $request)
    {

        $vehicle = VehicleModel::create([
            'make_id' => $request->make_id,
            'model_id' => $request->model_id,
            'type_id' => $request->type_id,
            'license_plate' => $request->vehicle_number,
            'in_service' => 1,
            'color_id' => $request->color_id,
            // 'user_id' => $user->id,
        ]);
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

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->mobile),
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
        $user->vehicle_id = $vehicle_id;
        $user->save();

        if ($request->file('driving_license') && $request->file('driving_license')->isValid()) {
            $this->upload_user_file($request->file('driving_license'), "license_image", $user->id);
        }
        if ($request->file('id_proof')) {
            $this->upload_user_file($request->file('id_proof'), "id_proof", $user->id);
        }

        $vehicle = VehicleModel::find($vehicle_id);
        $vehicle->driver_id = $user->id;
        $vehicle->save();
        DriverLogsModel::create(['driver_id' => $user->id, 'vehicle_id' => $vehicle_id, 'date' => date('Y-m-d H:i:s')]);
        DriverVehicleModel::updateOrCreate(['vehicle_id' => $vehicle_id], ['vehicle_id' => $vehicle_id, 'driver_id' => $user->id]);
        return redirect('driver-login')->with('success', 'You are registered Successfully! please login here.');
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

}
