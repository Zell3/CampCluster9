<?php
use App\Http\Controllers\formsController;
use App\Http\Controllers\authController;
use App\Http\Controllers\formAdditionController;
use App\Http\Controllers\formPrimaryController;
use App\Http\Controllers\MailController;
use App\Models\Hr;
use Illuminate\Http\Request;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\tableDataController;
use App\Models\RecruitmentModel;
use App\Models\tableDataModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\basicFormController;


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

// Route::get("/",function(){
//     return redirect("/login");
// });

Route::get('/otp',function(){
    return view('otp');
});

Route::get('/filter',function(){
    return view('filter');
});

Route::get('/form', function () {
    return view('form');
});

Route::resource("/form",basicFormController::class);

Route::get('/showFormPrimary', function () {
    return view('formPrimary');
});

Route::get('/showFormAddition', function () {
    return view('showFormAddition');
});

Route::get('/sidebar', function () {
    return view('dashboard');
});

Route::get('/form2', function () {
    return view('form2');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::resource('/createform', formsController::class);

// Route::post('/createform', [formsController::class, 'store']);
Route::get('/send', function () {
    return view('email');
});

Route::get('/sendmail', [MailController::class,'index']);
Route::get('/sendotp', [MailController::class,'index']);


Route::get("/login",[authController::class,"login_view"]) -> name("login");
Route::post("/login-check",[authController::class,"login_auth"]);
Route::get("/logout",[authController::class,"logout"]);

// Edit Forms Routes
Route::get('/editr/{id}', [formsController::class, 'edit'])->name('editr.edit');
Route::put("/editr/{id}",[formsController::class, 'update'])->name('editr.update');

Route::get('/round', function () {
    return view('makeRound');
});

Route::get('/showQR', function () {
    return view('showQR');
});

// รอบสมัคร
Route::resource('recruitmentRound', RecruitmentController::class);
// รายชื่อผู้สมัคร
Route::resource('tableData', tableDataController::class);
// ฟอร์มเบื้องต้น
Route::get('/formprimary/{id}', [formPrimaryController::class, 'show'])->name('form.primary');

// ฟอร์มเพิ่มเติม
Route::get('/show-additional-data/{id}', [formAdditionController::class,'show'])->name('showAdditionalData');

// โหลดไฟล์
// Route::get('/download-pdf/{id}', 'ApplicantController@downloadPDF')->name('downloadPDF');






Route::get('/', [RecruitmentController::class, 'index'])->name('home');

Route::get('/send', function () {
    return view('email');
});

Route::get('/sendmail', [MailController::class,'index']);

Route::get('/sendotp', [MailController::class,'index']);


Route::get("/login",[authController::class,"login_view"]) -> name("login");
Route::post("/login-check",[authController::class,"login_auth"]);
Route::get("/logout",[authController::class,"logout"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify-accout', [App\Http\Controllers\HomeController::class, 'verification'])->name('verifyAccount');
Route::post('/verifyotp', [App\Http\Controllers\HomeController::class, 'useractivation'])->name('verifyotp');

Route::post('/send-otp', [MailController::class, 'sendOtp'])->name('send-otp');

Route::post('/check-otp', [OTPController::class, 'checkOTP'])->name('send');

Route::get('/enter-email', function () {
    return view('enter_email');
});

Route::get('/enter-otp', function () {
    return view('enter_otp');
});


Route::post('/verify-otp', [MailController::class, 'verifyOTP']);

Route::post('/resend-otp', [MailController::class, 'resendOtp']);

Route::get('/send', function () {
    return view('email');
});

Route::get('/makeRound', function () {
    return view('makeRound');
});

