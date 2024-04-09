<?php

namespace App\Http\Controllers;

use App\Models\Hr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;


class authController extends Controller
{
    public function login_view()
    {
        return view("auth.login");
    }

    public function login_auth(Request $request)
    {
        $user = Hr::where('email', $request->email)->first();
        echo("there is something");
        if ($user) {
            // Compare the input password with the hashed password in the database
            if (Hash::check($request->password, $user->password)) {
                // Authentication succeeded
                Auth::login($user);
                // Optionally, you can use Laravel's built-in authentication like Auth::login($user);

                // Redirect authenticated user to the desired route
                return Redirect::to("/form");
            }
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to("/login");
    }
}
