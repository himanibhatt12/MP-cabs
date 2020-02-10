<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Model\FaqsModel;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $index['data'] = FaqsModel::get();
        return view('faqs.index', $index);
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(FaqRequest $request)
    {
        $new = FaqsModel::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faqs.index');
    }

    public function edit($id)
    {
        $data['faq'] = FaqsModel::find($id);
        return view('faqs.edit', $data);
    }

    public function update(FaqRequest $request)
    {
        $data = FaqsModel::find($request->get('id'));
        $data->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faqs.index');
    }

    public function destroy(Request $request)
    {
        FaqsModel::find($request->get('id'))->delete();
        return redirect()->route('faqs.index');
    }

    public function bulk_delete(Request $request)
    {
        FaqsModel::whereIn('id', $request->ids)->delete();
        return back();
    }
}
