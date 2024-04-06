<?php

namespace App\Http\Controllers;

use App\Models\Hr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function login_view(){
        return view("auth.login");
    }

    public function login_auth(Request $request){

        // Retrieve the user by the email address
        $user = Hr::where('hr_email', $request->email)->first();
        // Check if the user exists
        if ($user) {
            // Compare the input password with the password in the database
            if ($request->password == $user->hr_password) { // Note: No hashing is done here
                // Authenticate the user
                Auth::login($user);

                // Redirect authenticated user to dashboard or any desired route
                return redirect('/form');

            }
        }

        // Authentication failed
        return back()->withErrors(['hr_email' => 'Invalid credentials']);
    }

    public function logout(){
        Auth::logout();
        return redirect("/login");
    }


}
