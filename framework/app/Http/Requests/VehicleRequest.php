<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{

    public function authorize()
    {
        if (Auth::user()->user_type == "S" || Auth::user()->user_type == "O" || Auth::user()->user_type == "V") {
            return true;
        } else {
            abort(404);
        }
    }

    public function rules()
    {
        return [
            // 'make' => 'required',
            // 'model' => 'required',
            // 'color' => 'required',
            'make_id' => 'required',
            'model_id' => 'required',
            'color_id' => 'required',
            'year' => 'required|numeric',
            'engine_type' => 'required',
            'horse_power' => 'integer',
            'lic_exp_date' => 'required',
            'reg_exp_date' => 'required',
            'license_plate' => 'required|unique:vehicles,license_plate,' . \Request::get("id") . ',id,deleted_at,NULL',
            'int_mileage' => 'required|alpha_num',
            'vehicle_image' => 'nullable|image|mimes:jpg,png,jpeg',
            'average' => 'numeric',
        ];
    }
}
