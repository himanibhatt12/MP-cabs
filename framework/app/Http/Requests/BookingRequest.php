<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{

    public function authorize()
    {
        if (Auth::user()->user_type == "S" || Auth::user()->user_type == "O" || Auth::user()->user_type == "C" || Auth::user()->user_type == "V") {
            return true;
        } else {
            abort(404);
        }
    }

    public function rules()
    {
        return [
            'customer_id' => 'required',
            'vehicle_id' => 'required_if:package_id,',
            'pickup_addr' => 'required',
            'dest_addr' => 'required|different:pickup_addr',
            'package_id' => 'required_if:booking_option,Rental',

        ];
    }

    public function messages()
    {
        return [
            'dest_addr.different' => 'Pickup address and drop-off address must be different',
            'package_id.required_if' => 'You must have to select package, if selected booking option is Rental',
        ];
    }
}
