<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//aoutes auth and verfiied o reset password
Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::get('/register', '\App\Http\Controllers\Auth\AuthController@showRegister')->name('show-register-form');
    Route::post('/register', '\App\Http\Controllers\Auth\AuthController@register')->name('register');
    Route::get('/login', '\App\Http\Controllers\Auth\AuthController@showLogin')->name('show-login-form');
    Route::post('/login', '\App\Http\Controllers\Auth\AuthController@login')->name('login');
});
Route::get('/verify-email', [\App\Http\Controllers\Auth\VerifyController::class, 'sendToken'])->middleware('auth');
Route::get('/account/verify/{token}', [\App\Http\Controllers\Auth\VerifyController::class, 'verify'])->middleware('auth')->name('user-verification-email');
Route::get('forget-password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'showForgetPassword'])->middleware('guest');
Route::post('forget-password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'forgetPassword'])->middleware('guest')->name('forget-password');
Route::get('/reset-password/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'showFormReset'])->middleware('guest')->name('get-token');
Route::post('/password-update', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPassword'])->middleware('guest')->name('reset-password');


Route::get('/logout', '\App\Http\Controllers\Auth\AuthController@logout')->middleware('auth')->name('user-logout');

Route::get('/', function () {
//    $user = User::find(8);
//    $update = $user->update(['password' => bcrypt('#Javid142536')]);
//    dd($update);
    return view('welcome');
});


//
