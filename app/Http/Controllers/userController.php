<?php

namespace App\Http\Controllers;

use App\Models\Hr;
use Illuminate\Support\Facades\Auth;
use App\Models\formsmodel;
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
    /**
     * Store a newly created resource in storage.
     */
    }
    public function store(Request $request)
    {
        $name = $request->input("name");
        $lastname = $request->input("lastname");
        $phone = $request->input("phone");
        $email = $request->input("email");
        $position = $request->input("position");
        $ProgramLanguage = $request->input("ProgramLanguage");
        $addInformation = $request->input("addInformation");
        $performance = $request->input("performance");
        $talent = $request->input("talent");
        $educationBackground = $request->input("educationBackground");
        $language = $request->input("language");
        $expertSkills = $request->input("expertSkills");

        $formsModel  = new formsmodel();
        $rolesModel  = new formsmodel();

        $formsModel -> bdu_name = $name;
        $formsModel -> bdu__lastname = $lastname;
        $formsModel -> bdu_phone = $phone;
        $formsModel -> bdu_email = $email;
        $rolesModel -> ro_name = $position;
        $formsModel -> bdu_language_program = $ProgramLanguage;
        $formsModel -> bdu_additional_data = $addInformation;
        $formsModel -> bdu_working = $performance;
        $formsModel -> bdu_talent = $talent;
        $formsModel -> bdu_education = $educationBackground;
        $formsModel -> bdu_language = $language;
        $formsModel -> bdu_performance = $expertSkills;

        $formsModel -> save();
        $rolesModel -> save();

        $data["forms"] = formsmodel::all();
        return view('form',$data);
    }


}
