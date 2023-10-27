<?php


use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'index']);

Route::controller(\App\Http\Controllers\Admin\CategoryController::class)->prefix('categories')->group(function () {
    Route::get('/', 'index')->name('categories');
    Route::get('/create', 'create');
    Route::post('/create' , 'store')->name('store.category');
});

Route::controller(\App\Http\Controllers\Admin\CommentController::class)->prefix('comments')->group(function () {
    Route::get('/', 'index');

});
Route::controller(\App\Http\Controllers\Admin\UserController::class)->prefix('users')->group(function () {
    Route::get('/', 'index')->name('users');
    Route::get('/create', 'create');
    Route::post('/create', 'store')->name('create.user');
    Route::get('/edit/{id}', 'edit')->name('edit.user');
    Route::put('/update/{id}', 'update')->name('update.user');

});

