<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontendCustomerRegister;
use App\Http\Requests\FrontendLoginRequest;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Login;

class CustomersController extends Controller
{
    public function register()
    {
        return view('frontend.auth.customer.register');
    }

    public function login()
    {
        return view('frontend.auth.customer.login');
    }

    public function customer_login(FrontendLoginRequest $request)
    {
        if (Login::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Login::user();

            if ($user->user_type == "C") {
                $user->login_status = 1;
                $user->save();
                return redirect('/');
            } else {
                $this->guard()->logout();
                $request->session()->invalidate();
                return back()->withErrors(["error" => "Invalid login credentials"])->withInput();
            }
        } else {
            return back()->withErrors(["error" => "Invalid login credentials"])->withInput();
        }
    }

    protected function guard()
    {
        return Login::guard();
    }

    public function customer_register(FrontendCustomerRegister $request)
    {
        $id = User::create([
            "name" => $request->first_name . " " . $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "user_type" => "C",
            "api_token" => str_random(60),
        ])->id;
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->mobno = $request->phone;
        $user->gender = $request->gender;
        $user->save();
        return redirect('user-login')->with('success', 'You are registered Successfully! please login here.');
    }

    public function user_logout(Request $request)
    {
        $user = Login::user();
        $user->login_status = 1;
        $user->save();
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
