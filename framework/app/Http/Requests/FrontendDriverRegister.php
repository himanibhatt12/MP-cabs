<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontendDriverRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric',
            'alt_mobile' => 'required|numeric',
            'gender' => 'required|integer',
            'make_id' => 'required|integer',
            'type_id' => 'required|integer',
            'vehicle_number' => 'required|unique:vehicles,license_plate',
            'terms' => 'required|in:1',
            // 'vehicle_id' => 'required_if:company_id,|integer|nullable',
            // 'password' => 'required|same:confirm_password',
            'model_id' => 'required|integer',
            'id_proof' => 'required',
            'insurance' => 'required',
            'rc_book' => 'required',
            'driving_license' => 'required',
        ];
    }
}
