<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Model\CouponModel;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $index['data'] = CouponModel::get();
        return view('coupons.index', $index);
    }

    public function create()
    {
        return view('coupons.create');
    }

    public function store(CouponRequest $request)
    {
        $new = CouponModel::create([
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
        ]);

        return redirect()->route('coupons.index');
    }

    public function edit($id)
    {
        $data['data'] = CouponModel::find($id);
        return view('coupons.edit', $data);
    }

    public function update(CouponRequest $request)
    {
        $data = CouponModel::find($request->get('id'));
        $data->update([
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
        ]);

        return redirect()->route('coupons.index');
    }

    public function destroy(Request $request)
    {
        CouponModel::find($request->get('id'))->delete();
        return redirect()->route('coupons.index');
    }

    public function bulk_delete(Request $request)
    {
        CouponModel::whereIn('id', $request->ids)->delete();
        return back();
    }
}
