<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleDemandRequest;
use App\Model\User;
use App\Model\VehicleDemandRequests;
use Illuminate\Http\Request;
use PushNotification;

class VehicleDemandRequestController extends Controller
{
    public function index()
    {
        $index['data'] = VehicleDemandRequests::get();
        return view('vehicle_demands.index', $index);
    }

    public function create()
    {
        return view('vehicle_demands.create');
    }

    public function store(VehicleDemandRequest $request)
    {
        $new = VehicleDemandRequests::create([
            'source' => $request->source,
            'destination' => $request->destination,
            'date_time' => $request->date_time,
        ]);
        $this->vehicle_request_notification($new->id, 'new');

        return redirect()->route('vehicle-demands.index');
    }

    public function vehicle_request_notification($id, $type)
    {
        $request = VehicleDemandRequests::find($id);
        $data['success'] = 1;
        $data['key'] = "vehicle_request_notification";
        $data['message'] = 'Data Received.';
        $data['title'] = "Vehicle Demand Request";
        $data['description'] = "Do you want to Accept it ?";
        $data['timestamp'] = date('Y-m-d H:i:s');
        $data['data'] = array(
            'source' => $request->source,
            'destination' => $request->destination,
            'date_time' => $request->date_time,
            'type' => $type,
        );

        $drivers = User::where('user_type', 'D')->get();

        foreach ($drivers as $d) {
            if ($d->getMeta('fcm_id') != null) {
                PushNotification::app('appNameAndroid')
                    ->to($d->getMeta('fcm_id'))
                    ->send($data);
            }
        }

    }

    public function edit($id)
    {
        $data['data'] = VehicleDemandRequests::find($id);
        return view('vehicle_demands.edit', $data);
    }

    public function update(VehicleDemandRequest $request)
    {
        $data = VehicleDemandRequests::find($request->get('id'));
        $data->update([
            'source' => $request->source,
            'destination' => $request->destination,
            'date_time' => $request->date_time,
        ]);
        $this->vehicle_request_notification($request->id, 'update');
        return redirect()->route('vehicle-demands.index');
    }

    public function destroy(Request $request)
    {
        VehicleDemandRequests::find($request->get('id'))->delete();
        return redirect()->route('vehicle-demands.index');
    }

    public function bulk_delete(Request $request)
    {
        VehicleDemandRequests::whereIn('id', $request->ids)->delete();
        return back();
    }
}
