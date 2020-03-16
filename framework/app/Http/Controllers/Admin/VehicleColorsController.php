<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleColorRequest;
use App\Model\VehicleColor;
use Illuminate\Http\Request;

class VehicleColorsController extends Controller
{
    public function index()
    {
        $index['data'] = VehicleColor::get();
        return view('vehicle_colors.index', $index);
    }

    public function create()
    {
        return view('vehicle_colors.create');
    }

    public function store(VehicleColorRequest $request)
    {
        $new = VehicleColor::create([
            'color' => $request->color,
            'code' => $request->code,
        ]);

        return redirect()->route('vehicle-color.index');
    }

    public function edit($id)
    {
        $data['color'] = VehicleColor::find($id);
        return view('vehicle_colors.edit', $data);
    }

    public function update(VehicleColorRequest $request)
    {
        $data = VehicleColor::find($request->get('id'));
        $data->update([
            'color' => $request->color,
            'code' => $request->code,
        ]);

        return redirect()->route('vehicle-color.index');
    }

    public function destroy(Request $request)
    {
        VehicleColor::find($request->get('id'))->delete();
        return redirect()->route('vehicle-color.index');
    }

    public function bulk_delete(Request $request)
    {
        VehicleColor::whereIn('id', $request->ids)->delete();
        return back();
    }
}
