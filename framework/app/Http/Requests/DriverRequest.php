<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
        if ($this->request->has("edit")) {
            return [

                'name' => 'required',
                // 'last_name' => 'required',
                // 'address' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email|unique:users,email,' . \Request::get("id"),
                // 'start_date' => 'date|date_format:Y-m-d',
                'id_proof' => 'nullable|image|mimes:jpg,png,jpeg',
                'license_image' => 'nullable|image|mimes:jpg,png,jpeg',
                // 'documents.*' => 'nullable|mimes:jpg,png,jpeg,pdf,doc,docx',

            ];
        } else {
            return [

                'name' => 'required',
                // 'last_name' => 'required',
                // 'address' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email|unique:users,email,' . \Request::get("id"),
                // 'start_date' => 'date|date_format:Y-m-d',
                'id_proof' => 'nullable|image|mimes:jpg,png,jpeg',
                'license_image' => 'nullable|image|mimes:jpg,png,jpeg',
                // 'documents.*' => 'nullable|mimes:jpg,png,jpeg,pdf,doc,docx',

            ];
        }
    }
}
