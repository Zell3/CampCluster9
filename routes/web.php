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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/otp',function(){
    return view('otp');
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/tableData', function () {
    return view('tableData');
});
