<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->user_type == "S" || Auth::user()->user_type == "O") {
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
    // public function rules()
    // {
    //     return [
    //         'name' => 'required',
    //         'type' => 'required',
    //         'website' => 'required',
    //         'phone' => 'required',
    //         'address1' => 'required',
    //         'email' => 'required',
    //         'city' => 'required',
    //         'postal_code' => 'regex:/\d{5}(-\d{0,4})?/|nullable',
    //         'country' => 'required',
    //         'photo' => 'nullable|image|mimes:jpg,png,jpeg',
    //     ];
    // }

    public function rules()
    {
        if ($this->request->has("edit")) {
            $password = 'nullable';
        } else {
            $password = 'required|min:6';
        }
        return [
            'module' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . \Request::get("id"),
            'password' => $password,
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'module.required' => 'You must have to select Permission',

        ];
    }
}
