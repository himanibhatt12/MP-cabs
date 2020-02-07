<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Model\CitiesModel;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $index['data'] = CitiesModel::get();
        return view('cities.index', $index);
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(CityRequest $request)
    {
        $new = CitiesModel::create([
            'city' => $request->city,
        ]);

        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $data['city'] = CitiesModel::find($id);
        return view('cities.edit', $data);
    }

    public function update(CityRequest $request)
    {
        $data = CitiesModel::find($request->get('id'));
        $data->update([
            'city' => $request->city,
        ]);

        return redirect()->route('cities.index');
    }

    public function destroy(Request $request)
    {
        CitiesModel::find($request->get('id'))->delete();
        return redirect()->route('cities.index');
    }

    public function bulk_delete(Request $request)
    {
        CitiesModel::whereIn('id', $request->ids)->delete();
        return back();
    }
}
