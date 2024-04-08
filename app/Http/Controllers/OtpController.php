<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class OTPController extends Controller
{

    public function checkOTP(Request $request)
    {

        $otp = $this->generateRandomNumber();

        Mail::to($request->email)->send(new TestMail($otp));

        return redirect()->route('enter-otp')->with('email', $request->email);
    }

    public function verifyOTP(Request $request)
    {
        $otp = $request->otp;
        $email = $request->session()->get('email');

        if ($otp == 'เงื่อนไขตรวจสอบ OTP') {
            return "OTP ถูกต้อง";
        } else {
            return "OTP ไม่ถูกต้อง";
        }
    }

    private function generateRandomNumber()
    {
        $otp = '';
        for ($i = 0; $i < 6; $i++) {
            $otp .= rand(0, 9);
        }
        return $otp;
    }
}