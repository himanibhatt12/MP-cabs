<?php
namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Mail\SubscriptionMail;
use App\Model\FaqsModel;
use App\Model\MessageModel;
// use ColorInterpreter as NameThatColor;
use Hyvikk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class FrontendController extends Controller
{

    // public function test()
    // {
    //     $instance = new NameThatColor();

    //     $result = $instance->name("#008559");

    //     var_dump($result);

    // }

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
        return view('frontend.fixed_routes', $data);
    }

    public function availabilities()
    {
        $data['title'] = "Service Availabilities";
        return view('frontend.availabilities', $data);
    }

    public function home()
    {
        $data['title'] = "Home";
        return view('frontend.home', $data);
    }

    public function about()
    {
        $data['title'] = "About";
        return view('frontend.about', $data);
    }

    public function index()
    {
        return view('frontend.test');
    }
}
