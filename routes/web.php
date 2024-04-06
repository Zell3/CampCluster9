<?php

use App\Http\Controllers\userController;
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

Route::get("/",function(){
    return redirect("/login");
});

Route::get('/otp',function(){
    return view('OTP');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/edit', function () {
    return view('edit');
});


Route::get("/login",[userController::class,"login_view"]) -> name("login");
Route::post("/login",[userController::class,"login_auth"]);
Route::get("/logout",[userController::class,"logout"]);
