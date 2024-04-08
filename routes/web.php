<?php

use App\Http\Controllers\userController;
use App\Models\Hr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Route::get('/otp',function(){
    return view('otp');
});

Route::get('/sidebar',function(){
    return view('dashborad');
});

Route::get('/filter',function(){
    return view('filter');
});

Route::get('/showFromPrimary', function () {
    return view('formPrimary');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::resource('/form', userController::class);


