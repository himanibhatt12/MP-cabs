<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OneWayBookingRequest extends FormRequest
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
            'type_id' => 'required',
            'pickup_address' => 'required',
            'drop_address' => 'required',
            'no_of_person' => 'required|integer',
            'journey_date' => 'required',
            'journey_time' => 'required',
        ];
    }
}
