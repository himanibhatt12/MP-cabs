<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Validator;

class ResetPasswordController extends Controller
{

    public function reset_password(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        $errors = $validation->errors();

        if (count($errors) > 0) {
            return back()->with('error', implode(", ", $errors->all()));
        } else {
            $response = $this->broker()->reset(
                $this->credentials($request), function ($user, $password) {
                    $this->resetPassword($user, $password);
                }
            );
            if ($response == Password::PASSWORD_RESET) {
                return redirect('user-login')->with('success', __($response));
            } else {
                return back()->with('error', __($response));
            }

        }
    }
    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->setRememberToken(Str::random(60));
        $user->save();
    }

    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

    public function reset($token)
    {
        $data['token'] = $token;
        $data['email'] = $_GET['email'];
        return view('frontend.auth.passwords.reset', $data);
    }

    public function forget_password()
    {
        return view('frontend.auth.passwords.forget_password');
    }

    public function send_reset_link(Request $request)
    {

        $this->validateEmail($request);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            return back()->with('success', __($response));
        } else {
            return back()->with("error", __($response))->withInput();
        }
    }

    protected function validateEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
    }

    public function broker()
    {
        return Password::broker();
    }
}
