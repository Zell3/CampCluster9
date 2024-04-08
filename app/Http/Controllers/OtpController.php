<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPmail;
use App\Models\Verifytoken; // Assuming Varifytoken model exists

class OtpController extends Controller
{
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $validToken = rand(10, 100); // Fixed rand() function

        $get_token = new Verifytoken();
        $get_token->token = $validToken;
        $get_token->email = $data['email'];
        $get_token->save();

        $get_user_email = $data['email'];
        $get_user_name = $data['name'];

        Mail::to($data['email'])->send(new OTPmail($get_user_email, $validToken, $get_user_name));
    }
}
