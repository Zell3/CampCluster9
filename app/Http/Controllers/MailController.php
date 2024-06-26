<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Email;


class MailController extends Controller
{
    public function sendOtp(Request $request)
    {
        $mailData = new TestMail($request->email, null);
        Mail::to($request->email)->send($mailData);

        return view('enter_otp')->with('email', $request->email);
    }

    public function verifyOTP(Request $request)
    {
        // ตรวจสอบว่า OTP ที่ผู้ใช้กรอกถูกต้องหรือไม่
        $email = $request->email;
        $otp = $request->otp;

        $emailModel = Email::where('email_name', $email)->where('email_otp', $otp)->first();

        if ($emailModel) {
            // OTP ถูกต้อง ทำการลบ OTP ออกจาก Session
            $request->session()->forget('otp');
            // Redirect ไปหน้าที่ต้องการ
            return redirect('/login');
        } else {
            // OTP ไม่ถูกต้อง ให้แสดงข้อความผิดพลาด
            dd($email);
            return view('enter_otp')->with(['otp' => 'Incorrect OTP, please try again.']);
        }
    }
}
