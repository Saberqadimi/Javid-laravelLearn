<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserVerify;
use App\Traits\generateCharacterRand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VerifyController extends Controller
{
    use generateCharacterRand;

    public function sendToken()
    {
        try {
            $token = $this->generateToken();
            //create userVerify
            $this->createUserVerify($token);
            //send email
            $this->sendEmailToUser($token);

            return response()->json(['message', "ایمیل برای شما ارسال شد"]);
        } catch (\Exception $exception) {
            info('this error : ' . $exception->getMessage());
        }
    }

    public function verify($token)
    {
        $verifyUser = $this->userVerify($token);
        $message = "متاسفیم کاربر گرامی عملیات وریفای کردن وتایید کردن ایمیل شما ناموفق بود.";

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            return $this->emailVerifiedAtUpdate($user, $verifyUser);
        }
        return redirect('/')->with(['message' => $message]);
    }

    private function sendEmailToUser(string $token)
    {
        Mail::send('email.emailVerification', ['token' => $token], function ($message) {
            $message->to(Auth::user()->email);
            $message->subject('تایید ایمیل کاربری شما');
            $message->from('sender@example.com');
        });
    }

    private function userVerify($token)
    {
        return UserVerify::where('token', $token)->first();
    }

    private function emailVerifiedAtUpdate($user, $verifyUser): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if (!$user->email_verified_at) {
            $verifyUser->user->email_verified_at = now();
            $verifyUser->user->save();
            $verifyUser->delete();
            $message = "عملیات وریفای کردن حساب کاربری شما با موفقیت انجام شد.";
            return redirect('/')->with(['message' => $message]);
        } else {
            $message = "ایمیل شما از قبل وریفای شده است.";
            return redirect('/')->with(['message' => $message]);
        }
    }

    private function createUserVerify($token): void
    {
        UserVerify::create([
            'user_id' => auth()->id(),
            'token' => $token
        ]);
    }
}
