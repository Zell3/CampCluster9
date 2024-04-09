<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Email;
use Carbon\Carbon;

class ClearExpiredOTP
{
    public function handle($request, Closure $next)
    {
        // กำหนดโซนเวลาเป็น Asia/Bangkok
        Carbon::setLocale('th');

        // หา OTP ที่มีอายุมากกว่า 1 นาที
        $expiredOTP = Email::where('email_create_at', '<=', Carbon::now('Asia/Bangkok')->subMinutes(1))->get();

        // ลบ OTP ที่หมดอายุ
        foreach ($expiredOTP as $otp) {
            $otp->delete();
        }

        return $next($request);
    }
} 
