<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class testpopupmail extends Controller
{
    public function showForm()
    {
        return view('userForm');
    }

    public function processForm(Request $request)
    {
        // สร้าง OTP 6 หลัก
        $otp = $this->generateRandomNumber();

        // ส่งอีเมลพร้อมระบุ OTP
        Mail::to($request->email)->send(new TestMail($otp));

        // แสดงปอปอัปให้กรอก OTP
        return view('otpForm')->with('email_name', $request->email);
    }

    /**
     * Generate a random 6-digit number.
     *
     * @return string
     */
    private function generateRandomNumber()
    {
        $random_number = '';
        for ($i = 0; $i < 6; $i++) {
            $random_number .= rand(0, 9);
        }
        return $random_number;
    }

    public function verifyOTP(Request $request)
    {
        // ตรวจสอบว่า OTP ที่ผู้ใช้กรอกถูกต้องหรือไม่
        if ($request->otp === $request->session()->get('otp')) {
            // OTP ถูกต้อง ทำการลบ OTP ออกจาก Session
            $request->session()->forget('otp');
            // Redirect ไปหน้าที่ต้องการ
            return redirect('/home');
        } else {
            // OTP ไม่ถูกต้อง ให้แสดงข้อความผิดพลาด
            return back()->withErrors(['otp' => 'Incorrect OTP, please try again.']);
        }
    }
}