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

        echo('Email success.');
    }
}
