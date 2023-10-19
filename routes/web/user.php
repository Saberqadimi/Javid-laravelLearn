<?php


use Illuminate\Support\Facades\Route;



Route::get('userpanel/index' , function (){

    dd('you are user');
})->middleware('user');
