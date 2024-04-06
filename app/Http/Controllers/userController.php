<?php

namespace App\Http\Controllers;
use App\Models\formsmodel;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
