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

        Mail::to($request->email)->send(new TestMail($request->email,$otp));

        return redirect()->route('enter-otp')->with('email', $request->email);
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