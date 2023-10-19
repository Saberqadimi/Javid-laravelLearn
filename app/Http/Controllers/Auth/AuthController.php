<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        //redirect
        Alert::toast('ثبت نام شما در سیستم با موفقیت انجام شد.' , 'success');
        return redirect('/');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (!$this->isValidationCredentials($request))
        {
            info('مشخصات شما در سیستم همخوانی ندارد.');
            $messageError = "مشخصات شما در سیستم همخوانی ندارد.";
            return view('auth.login' , compact('messageError'));
        }

        $user = $this->getUser($request);
        Auth::login($user, $request->remember);
        Alert::toast('ورود شما در سیستم انجام شد', 'success');
        return redirect('/');
    }

    protected function isValidationCredentials($request): bool
    {
        return Auth::validate($request->only(['email' , 'password']));
    }

    private function getUser(LoginRequest $request)
    {
        return User::where('email' , $request->email)->firstOrFail();
    }

    public function logout(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {

        Auth::logout();
        Alert::toast('شما از سیستم خارج شدید', 'success');

        return redirect('/');
    }

}
