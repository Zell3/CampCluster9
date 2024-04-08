<?php

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

Route::get('/filter',function(){
    return view('filter');
});

Route::get('/form', function () {
    return view('form');
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

Route::get('/showQR', function () {
    return view('showQR');
});

Route::get('/showFormPrimary', function () {
    return view('formPrimary');
});
