<?php
namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewUsRequest;
use App\Mail\SubscriptionMail;
use App\Model\CitiesModel;
use App\Model\CompanyReviews;
use App\Model\FaqsModel;
use App\Model\MessageModel;
use App\Model\PackagesModel;
use App\Model\RouteModel;
use App\Model\Testimonial;
use App\Model\VehicleMake;
use App\Model\VehicleTypeModel;
use Hyvikk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Validator;

class FrontendController extends Controller
{

    public function post_review_us(ReviewUsRequest $request)
    {
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

        return back()->with('success', 'Your Review has been Submitted Successfully.');
    }

    public function message_us(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'message' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);
        $errors = $validation->errors();
        if (count($errors) > 0) {
            $message = "Oops, Something got Wrong. Please, Try again Later!";
        } else {
            MessageModel::create(['message' => $request->message, 'name' => $request->name, 'email' => $request->email]);
            $message = "Thank you ! We will get back to you Soon...";
        }
        return $message;
    }

    public function subscribe(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        $errors = $validation->errors();
        if (count($errors) > 0) {
            $message = implode(", ", $errors->all());
        } else {
            $message = "Your Subscription Request has been Submitted Successfully.";
            Mail::to(Hyvikk::get("email"))->send(new SubscriptionMail($request->email));
        }
        return $message;
    }

    public function faq()
    {
        $data['title'] = "FAQ";
        $data['faqs'] = FaqsModel::get();
        return view('frontend.faq', $data);
    }

    public function brands()
    {
        $data['title'] = "Brands";
        $data['brands'] = VehicleMake::get();
        return view('frontend.brands', $data);
    }

    public function review_us()
    {
        return view('frontend.auth.driver.review_us');
    }

    public function contact_us()
    {
        $data['title'] = "Contact us";
        return view('frontend.contact_us', $data);
    }

    public function fixed_routes()
    {
        $data['title'] = "Fixed routes";
        $data['routes'] = RouteModel::get();
        return view('frontend.fixed_routes', $data);
    }

    public function availabilities()
    {
        $data['title'] = "Service Availabilities";
        $data['cities'] = CitiesModel::get();
        return view('frontend.availabilities', $data);
    }

    public function home()
    {
        $data['title'] = "Home";
        $data['packages'] = PackagesModel::get();
        $data['cities'] = CitiesModel::get();
        $data['routes'] = RouteModel::get();
        $data['brands'] = VehicleMake::get();
        $data['testimonials'] = Testimonial::get();
        $data['types'] = VehicleTypeModel::where('isenable', 1)->get();
        return view('frontend.home', $data);
    }

    public function about()
    {
        $data['title'] = "About";
        return view('frontend.about', $data);
    }

}
