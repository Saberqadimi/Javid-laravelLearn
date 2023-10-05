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
    Route::controller(ArticleController::class)->prefix('articles')->group(function () {
        Route::get('/', 'index');
        Route::get('/create',  'create');
        Route::post('/create',  'store')->name('article.store');
    });

});



//