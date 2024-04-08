<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\formsmodel;
use App\Models\rolesmodel;

class YourControllerName extends Controller
{
    public function login_auth(Request $request)
    {
        // Your login_auth logic here
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
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

        $formsModel = new formsmodel();
        $formsModel->bdu_name = $name;
        $formsModel->bdu_lastname = $lastname;
        $formsModel->bdu_phone = $phone;
        $formsModel->bdu_email = $email;
        $formsModel->bdu_language_program = $ProgramLanguage;
        $formsModel->bdu_additional_data = $addInformation;
        $formsModel->bdu_working = $performance;
        $formsModel->bdu_talent = $talent;
        $formsModel->bdu_education = $educationBackground;
        $formsModel->bdu_language = $language;
        $formsModel->bdu_performance = $expertSkills;

        $formsModel->save();

        $rolesModel = new rolesmodel();
        $rolesModel->ro_name = $position;
        // Assuming you have more attributes for rolesmodel, fill them accordingly

        $rolesModel->save();

        $data["forms"] = formsmodel::all();
        return view('form', $data);
    }

    // Implement other methods (show, edit, update, destroy) if needed
}
