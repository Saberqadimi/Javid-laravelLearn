<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\ArticleController;

Route::controller(ArticleController::class)->prefix('articles')->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'store')->name('article.store');
    Route::get('/test' , function (){

        $article = \Modules\Blog\Entities\Blog::with(['categories' , 'tagged'])->find(7);

        return response()->json(['data' => $article]);
    });
});
