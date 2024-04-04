<?php

use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('OTP');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/login', function () {
    return view('auth/login');
}) -> name("login");

Route::post('/login', function (Request $request) {
    $validatedData = $request->validate([
        "email" => "email",
        "password" => "min:4"
    ]);

    if (Auth::attempt(["hr_email" => $validatedData["email"], "hr_password" => $validatedData["password"]])) {
        return redirect("/");
    } else {
        return redirect("/login");
    }
});

// Route::resource("/welcome",crudController::class)->middleware("auth");
// Route::get("/register",[userController::class,"register_view"]);
// Route::post("/register",[userController::class,"register_store"]);
// Route::get("/login",[userController::class,"login_view"]) -> name("login");
// Route::post("/login",[userController::class,"login_auth"]);
// Route::get("/logout",[userController::class,"logout"]);
