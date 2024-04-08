<?php
use App\Http\Controllers\authController;
use App\Http\Controllers\EditFormsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\userController;
use App\Models\Hr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\OTPController;

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

Route::get("/",function(){
    return redirect("/login");
});

Route::get('/otp',function(){
    return view('otp');
});

Route::get('/sidebar',function(){
    return view('dashboard');
});

Route::get('/sidebar',function(){
    return view('dashboard');
});

Route::get('/filter',function(){
    return view('filter');
});

Route::post('/form', function () {
    return view('form');
});

Route::get('/showFormPrimary', function () {
    return view('formPrimary');
});

Route::get('/showFormAddition', function () {
    return view('showFormAddition');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form2', function () {
    return view('form2');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/send', function () {
    return view('email');
});

Route::get('/sendmail', [MailController::class,'index']);

Route::get('/sendotp', [MailController::class,'index']);


Route::get("/login",[authController::class,"login_view"]) -> name("login");
Route::post("/login",[authController::class,"login_auth"]);
Route::get("/logout",[authController::class,"logout"]);

// Edit Forms Routes
Route::get('/editr/{id}', [EditFormsController::class, 'edit'])->name('editr.edit');
Route::put("/editr/{id}",[EditFormsController::class, 'update'])->name('editr.update');

Route::get('/round', function () {
    return view('makeRound');
});

Route::get('/showQR', function () {
    return view('showQR');
});

Route::get('/tableData', function () {
    return view('tableData');
});
Route::get("/logout",[authController::class,"logout"]);

Route::get('/send', function () {
    return view('email');
});

Route::get('/sendmail', [MailController::class,'index']);

Route::get('/sendotp', [MailController::class,'index']);


Route::get("/login",[authController::class,"login_view"]) -> name("login");
Route::post("/login",[authController::class,"login_auth"]);
Route::get("/logout",[authController::class,"logout"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify-accout', [App\Http\Controllers\HomeController::class, 'verification'])->name('verifyAccount');
Route::post('/verifyotp', [App\Http\Controllers\HomeController::class, 'useractivation'])->name('verifyotp');

Route::get('/enter-email', function () {
    return view('enter_email');
});

Route::post('/send-otp', [MailController::class, 'sendOtp'])->name('send-otp');

Route::post('/check-otp', [OTPController::class, 'checkOTP'])->name('send');


Route::get('/enter-otp', function () {
    return view('enter_otp');
});


Route::post('/verify-otp', [OTPController::class, 'verifyOTP'])->name('verify-otp');