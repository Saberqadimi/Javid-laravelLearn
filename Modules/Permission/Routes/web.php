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

Route::controller(\Modules\Permission\Http\Controllers\Admin\RoleController::class)->prefix('roles')->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'store')->name('role.store');
    Route::get('/edit/{role_id}', 'edit')->name('role.edit');
    Route::put('/update/{role_id}', 'update')->name('role.update');
    Route::get('/delete/{role_id}', 'destroy')->name('role.delete');
});
Route::controller(\Modules\Permission\Http\Controllers\Admin\PermissionController::class)->prefix('permissions')->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'store')->name('permission.store');
    Route::get('/edit/{permission_id}', 'edit')->name('permission.edit');
    Route::put('/update/{permission_id}', 'update')->name('permission.update');
    Route::get('/delete/{permission_id}', 'destroy')->name('permission.delete');
});
Route::get('/user-permission/{user_id}' , [\Modules\Permission\Http\Controllers\UserPermission\UserPermissionController::class , 'templateAddPermission'])->name('template-add-permission');
Route::post('/user-permission/{user_id}' , [\Modules\Permission\Http\Controllers\UserPermission\UserPermissionController::class , 'addPermission'])->name('add-permission');
