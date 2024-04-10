<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Email;


class MailController extends Controller
{

    public function generateRandomNumber() {
        $random_number = '';
        for ($i = 0; $i < 6; $i++) {
            $random_number .= rand(0, 9);
        }
        return $random_number;
    }
    
    
    public function sendOtp(Request $request)
    {
        $mailData = new TestMail($request->email, null);
        Mail::to($request->email)->send($mailData);

        return view('enter_otp')->with('email', $request->email);
    }

    public function resendOtp(Request $request)
    {
      
        $otp = $this->generateRandomNumber();

      
        $mailData = new TestMail($request->email, $otp);
        Mail::to($request->email)->send($mailData);

        
        return view('enter_otp')->with('email', $request->email)->with('resend', true);
    }

    public function verifyOTP(Request $request)
    {
        // ตรวจสอบว่า OTP ที่ผู้ใช้กรอกถูกต้องหรือไม่
        $email = $request->email;
        $otp = $request->otp;

        $emailModel = Email::where('email_name', $email)->where('email_otp', $otp)->first();

        if ($emailModel) {
            $emailModel->delete();

            $request->session()->forget('otp');

            return redirect('/login');
        } else {
            // OTP ไม่ถูกต้อง ให้แสดงข้อความผิดพลาด
            dd('Incorrect OTP, please try again.');
            return view('enter_otp')->with(['otp' => 'Incorrect OTP, please try again.']);
        }
    }
}

