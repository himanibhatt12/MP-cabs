<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RouteRequest;
use App\Model\RouteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RouteController extends Controller
{
    public function index()
    {
        $data = RouteModel::get();
        return view('routes.index', compact('data'));
    }

    public function create()
    {
        return view('routes.create');
    }

    public function store(RouteRequest $request)
    {
        $data = RouteModel::create([
            'name' => $request->name,
            'source' => $request->source,
            'destination' => $request->destination,
            'cost' => $request->cost,
            'ratings' => $request->ratings,
        ]);
        $file = $request->file('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $destinationPath = './uploads'; // upload path
            $extension = $file->getClientOriginalExtension();
            $fileName1 = Str::uuid() . '.' . $extension;
            $file->move($destinationPath, $fileName1);
            $data->image = $fileName1;
            $data->save();
        }
        return redirect('admin/routes');
    }

    public function edit($id)
    {
        $data = RouteModel::find($id);
        return view('routes.edit', compact('data'));
    }

    public function update(RouteRequest $request)
    {
        $data = RouteModel::find($request->id);
        $data->name = $request->name;
        $data->source = $request->source;
        $data->destination = $request->destination;
        $data->cost = $request->cost;
        $data->ratings = $request->ratings;
        $data->save();
        $file = $request->file('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $destinationPath = './uploads'; // upload path
            $extension = $file->getClientOriginalExtension();
            $fileName1 = Str::uuid() . '.' . $extension;
            $file->move($destinationPath, $fileName1);
            $data->image = $fileName1;
            $data->save();
        }
        return redirect('admin/routes');
    }

    public function destroy(Request $request)
    {
        RouteModel::find($request->id)->delete();
        return redirect('admin/routes');
    }

    public function bulk_delete(Request $request)
    {
        RouteModel::whereIn('id', $request->ids)->delete();
        return back();
    }
}
