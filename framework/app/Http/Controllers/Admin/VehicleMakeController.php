<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleMakeRequest;
use App\Model\VehicleMake;
use Illuminate\Http\Request;

class VehicleMakeController extends Controller
{

    public function index()
    {
        $index['data'] = VehicleMake::get();
        return view('vehicle_make.index', $index);
    }

    public function create()
    {
        return view('vehicle_make.create');
    }

    public function store(VehicleMakeRequest $request)
    {
        $new = VehicleMake::create([
            'make' => $request->make,
        ]);

        return redirect()->route('vehicle-make.index');
    }

    public function edit($id)
    {
        $data['vehicle_make'] = VehicleMake::find($id);
        return view('vehicle_make.edit', $data);
    }

    public function update(VehicleMakeRequest $request)
    {

        $data = VehicleMake::find($request->get('id'));
        $data->update([
            'make' => $request->make,
        ]);

        return redirect()->route('vehicle-make.index');
    }

    public function destroy(Request $request)
    {
        VehicleMake::find($request->get('id'))->delete();
        return redirect()->route('vehicle-make.index');
    }

    public function bulk_delete(Request $request)
    {
        VehicleMake::whereIn('id', $request->ids)->delete();
        return back();
    }
}
