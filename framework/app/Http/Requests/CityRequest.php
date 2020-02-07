<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
        return [
            'city' => 'required|unique:cities,city,' . \Request::get("id"),
        ];
    }

    public function messages()
    {
        return [
            'city.unique' => 'City already exists',
        ];
    }
}
