<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\User;
use App\Models\UserVerify;
use App\Traits\generateCharacterRand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ResetPasswordController extends Controller
{
    use generateCharacterRand;

    public function showForgetPassword(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.forget-password');
    }

    public function forgetPassword(Request $request)
    {
        $token = $this->generateToken();
        //create reset password record
        $this->createResetPassword($token, $request);
        //send email
        $this->sendEmailToUser($token, $request);

        return response()->json(['message', "ایمیل برای شما ارسال شد"]);
    }

    public function showFormReset($token)
    {
        $resetPassToken = $this->getPasswordReset($token);
        if (!$resetPassToken) {
            return response()->json(['message' => "اطلاعات شما برای ریست پسوورد اشتباه میباشد."]);
        }
        $userEmail = $resetPassToken->user->email;
        return view('auth.reset-password', compact('userEmail'));
    }

    public function resetPassword(Request $request)
    {
        //get email and password user
        $user = $this->getUser($request);
        //update password user
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        //redirect
        Auth::login($user);
        $resetPassTokens = PasswordReset::where('email', $request->email)->get();
        foreach ($resetPassTokens as $item) {
            $item->delete();
        }
        Alert::toast('رمز عبور با موفقیت بروزرسانی شد و در سیستم شما وارد شدید.', 'success');
        return redirect('/');

    }

    private function createResetPassword(string $token, $request)
    {
        PasswordReset::create([
            'email' => $request->email,
            'token' => $token
        ]);
    }

    private function sendEmailToUser(string $token, $request)
    {
        Mail::send('email.resetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('فراموشی رمز عبور ');
            $message->from('sender@example.com');
        });
    }

    private function getPasswordReset($token)
    {
        return PasswordReset::where('token', $token)->first();
    }

    private function getUser(Request $request)
    {
        return User::where('email', $request->email)->first();
    }
}
