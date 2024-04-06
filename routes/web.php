<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Models\Hr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

Route::post('/form', function () {
    return view('form');
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

Route::get("/login",[authController::class,"login_view"]) -> name("login");
Route::post("/login",[authController::class,"login_auth"]);
Route::get("/logout",[authController::class,"logout"]);