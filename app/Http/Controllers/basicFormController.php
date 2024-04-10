<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\basicFormModel;
use App\Models\roleModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class basicFormController extends Controller
{
    public function index(Request $request)
    {

    }
    public function show(string $token, string $id)
    {
        $roles_table = RoleModel::all();
        $roles_id = [];
        $roles_name = [];
        foreach ($roles_table as $role) {
            $roles_id[] = $role->ro_id;
            $roles_name[] = $role->ro_name;
        }
        // Find the form by form_token
        $forms = Forms::where('form_token', $token)->first(); // Use first() to execute the query and get a single resultp
        $roles_table = roleModel::all();
        if ($forms === null) {
            // If the form doesn't exist, redirect back to the forms page
            return view("error");
        }
        // Check if the form was found
        $roles = $forms->form_ro_id;
        foreach ($roles as $role) {
            if($role == $id) {
                return view("form", compact("forms", "id"));
            }
        }
        if ($id == "all") {
            return view("form", compact("forms", "id","roles_id","roles_name"));
        }

        return view("error");
    }

    public function store(Request $request)
    {

        $token = $request->input("form_token");
        $name = $request->input("name");
        $lastname = $request->input("lastname");
        $phone = $request->input("phone");
        $email = $request->input("email");
        $employee_or_not = $request->input("employee");
        $cooperative_or_not = $request->input("cooperative");
        $role_id = $request->input("role_id");
        $programlanguage = $request->input("programlanguage");
        $addinformation = $request->input("addinformation");

        // Initialize $base64Image with a default or empty value
        $base64Image = '';

        // Check if the image is uploaded and process it
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getRealPath();
            $imageData = file_get_contents($image);
            $base64Image = base64_encode($imageData);
        }

        $performance = $request->input("performance");
        $talent = $request->input("talent");
        $educationbackground = $request->input("educationbackground");
        $language = $request->input("language");
        $expertskills = $request->input("expertSkills");

        // $role_id = roleModel::where('ro_name', $role_name)->value('ro_id');
        $currentTime = Carbon::now();

        $basicFormModel = new basicFormModel();

        // Set your model properties
        $basicFormModel->bdu_ro_id = $role_id;
        $basicFormModel->bdu_form_token = $token;
        $basicFormModel->bdu_name = $name;
        $basicFormModel->bdu_lastname = $lastname;
        $basicFormModel->bdu_phone = $phone;
        $basicFormModel->bdu_email = $email;
        if($cooperative_or_not == 1){
            $basicFormModel->bdu_working = "สหกิจศึกษา";
        }else{
            $basicFormModel->bdu_working = "พนักงานทั่วไป";
        }
        $basicFormModel->bdu_language_program = $programlanguage;
        $basicFormModel->bdu_additional_data = $addinformation;
        $basicFormModel->bdu_resume_name = $base64Image;
        $basicFormModel->bdu_performance = $performance;
        $basicFormModel->bdu_talent = $talent;
        $basicFormModel->bdu_education = $educationbackground;
        $basicFormModel->bdu_language = $language;
        $basicFormModel->bdu_skill = $expertskills;
        $basicFormModel->bdu_register_date = $currentTime->toDateString();

        $basicFormModel->save();

        echo "กรอกข้อมูลสำเร็จ";
        // return redirect("/tableData?form_token=$token");
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
