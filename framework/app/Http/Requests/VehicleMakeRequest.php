<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class VehicleMakeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->user_type == "S" || Auth::user()->user_type == "O" || Auth::user()->user_type == "V") {
            return true;
        } else {
            abort(404);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->request->has("edit")) {
            return [
                'make' => 'required|unique:vehicle_make,make,' . \Request::get("id") . ',id,deleted_at,NULL',
                'image' => 'nullable|image|dimensions:width=400,height=300',
            ];
        } else {
            return [
                'make' => 'required|unique:vehicle_make,make,' . \Request::get("id") . ',id,deleted_at,NULL',
                'image' => 'required|image|dimensions:width=400,height=300',
            ];
        }
    }

    public function messages()
    {
        return [
            'image.dimensions' => 'Icon Image dimensions must be 400x300.',
        ];
    }
}
