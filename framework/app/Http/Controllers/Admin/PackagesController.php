<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Model\PackagesModel;
use App\Model\VehicleModel;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $index['data'] = PackagesModel::get();
        return view('packages.index', $index);
    }

    public function create()
    {
        $vehicles = VehicleModel::get();
        return view('packages.create', compact('vehicles'));
    }

    public function store(PackageRequest $request)
    {
        $new = PackagesModel::create([
            'vehicle_id' => $request->vehicle_id,
            'hourly_rate' => $request->hourly_rate,
            'km_rate' => $request->km_rate,
        ]);

        return redirect()->route('packages.index');
    }

    public function edit($id)
    {
        $data['data'] = PackagesModel::find($id);
        $data['vehicles'] = VehicleModel::get();
        return view('packages.edit', $data);
    }

    public function update(PackageRequest $request)
    {
        $data = PackagesModel::find($request->get('id'));
        $data->update([
            'vehicle_id' => $request->vehicle_id,
            'hourly_rate' => $request->hourly_rate,
            'km_rate' => $request->km_rate,
        ]);

        return redirect()->route('packages.index');
    }

    public function destroy(Request $request)
    {
        PackagesModel::find($request->get('id'))->delete();
        return redirect()->route('packages.index');
    }

    public function bulk_delete(Request $request)
    {
        PackagesModel::whereIn('id', $request->ids)->delete();
        return back();
    }
}
