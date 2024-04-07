<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Kachen',
            'body' => '*** rai eterk',
        ];
        
        Mail::to('65160320@go.buu.ac.th')->send(new TestMail($mailData));

        echo('Email success.');
    }
}
