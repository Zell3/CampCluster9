<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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
        $generated_number = $this->generateRandomNumber(); // Corrected function call
        $mailData = $generated_number; // Used the generated number
        
        
        Mail::to($request->email)->send(new TestMail($request->email,$mailData));


        return view('enter_otp')->with('email', $request->email);


    }

    public function verifyOTP(Request $request)
    {
        // ตรวจสอบว่า OTP ที่ผู้ใช้กรอกถูกต้องหรือไม่
        if ($request->otp === $request->session()->get('otp')) {
            // OTP ถูกต้อง ทำการลบ OTP ออกจาก Session
            $request->session()->forget('otp');
            // Redirect ไปหน้าที่ต้องการ
            return redirect('/login');
        } else {
            // OTP ไม่ถูกต้อง ให้แสดงข้อความผิดพลาด
            return back()->withErrors(['otp' => 'Incorrect OTP, please try again.']);
        }
    }

    
}
