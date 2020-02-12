<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Model\CitiesModel;
use App\Model\CompanyReviews;
use App\Model\FaqsModel;
use App\Model\RouteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class MPCabsFrontend extends Controller
{
    public function faqs()
    {
        $faqs = FaqsModel::get();
        $data = array();
        foreach ($faqs as $faq) {
            $data[] = array('id' => "$faq->id", 'question' => $faq->question, 'answer' => $faq->answer);
        }
        return response()->json($data);
    }

    public function cities()
    {
        $cities = CitiesModel::get();
        $data = array();
        foreach ($cities as $city) {
            if ($city->image) {
                $image = url('uploads/' . $city->image);
            } else {
                $image = url('uploads/no-image.png');
            }
            $data[] = array('id' => "$city->id", 'city' => $city->city, 'cost' => $city->cost, 'image' => $image, 'other_info' => $city->other);
        }
        return response()->json($data);
    }

    public function routes()
    {
        $routes = RouteModel::get();
        $data = array();
        foreach ($routes as $route) {
            if ($route->image) {
                $image = url('uploads/' . $route->image);
            } else {
                $image = url('uploads/no-image.png');
            }
            $data[] = array('id' => "$route->id", 'cost' => $route->cost, 'image' => $image,
                'name' => $route->name, 'source' => $route->source, 'destination' => $route->destination, 'ratings' => $route->ratings);
        }
        return response()->json($data);
    }

    public function review_us(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'review' => 'required',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            $data['success'] = "0";
            $data['message'] = implode(", ", $errors->all());
            $data['data'] = "";
        } else {
            $review = CompanyReviews::create([
                'name' => $request->name,
                'email' => $request->email,
                'review' => $request->review,
            ]);

            $file = $request->file('photo');

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $destinationPath = './uploads'; // upload path
                $extension = $file->getClientOriginalExtension();
                $fileName1 = Str::uuid() . '.' . $extension;
                $file->move($destinationPath, $fileName1);
                $review->photo = $fileName1;
                $review->save();
            }
            $data['success'] = "1";
            $data['message'] = "Your Review has been Submitted Successfully.";
            $data['data'] = array('id' => "$review->id");
        }
        return response()->json($data);
    }
}
