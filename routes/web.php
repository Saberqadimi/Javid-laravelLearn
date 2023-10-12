<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
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

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/', [AdminController::class, 'index']);

    Route::controller(\App\Http\Controllers\Admin\CategoryController::class)->prefix('categories')->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');

    });

    Route::controller(ArticleController::class)->prefix('articles')->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/create', 'store')->name('article.store');
    });
    Route::controller(\App\Http\Controllers\Admin\CommentController::class)->prefix('comments')->group(function () {
        Route::get('/', 'index');

    });
    Route::controller(\App\Http\Controllers\Admin\UserController::class)->prefix('users')->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');

    });


});

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


Route::get('/', function () {
//    dd(auth()->user());
    return view('welcome');
});



//
