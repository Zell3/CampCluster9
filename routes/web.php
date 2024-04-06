<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    echo "<h1>test</h1><a href='".url('/')."'>HOME ".url('/')."</a>";
});

Route::get('/otp',function(){
    return view('OTP');
});

Route::get('/sidebar',function(){
    return view('dashborad');
});

Route::get('/filter',function(){
    return view('filter');
});


Route::get('/form', function () {
    return view('form');
});

Route::get('/showFromPrimary', function () {
    return view('formPrimary');
});
