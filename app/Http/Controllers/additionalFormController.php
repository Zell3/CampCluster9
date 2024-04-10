<?php

namespace App\Http\Controllers;

use App\Models\additionalFormModel;
use App\Models\basicFormModel;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class additionalFormController extends Controller
{
    
    public function index()
    {
        return view ("form2");
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
{

}


   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        $lastRow = basicFormModel::latest()->first()->bdu_id;
        if($lastRow){
            $lastRow = basicFormModel::latest()->first()->bdu_id;
        }else{
            $lastRow = 0;
        }
        
        $basicDataUser = basicFormModel::find($id);
        $basicDataUser -> bdu_adu_id = $lastRow;

        // Retrieve input data from the request
        $birthday = $request->input("birthday");
        $nationality = $request->input("nationality");
        $religion = $request->input("religion");
        $maritalstatus = $request->input("maritalstatus");
        $address = $request->input("address");
        $currentaddress = $request->input("currentaddress");
        $emergency_contact_name = $request->input("emergency_contact_name");
        $emergency_contact_lastname = $request->input("emergency_contact_lastname");
        $emergency_contact_status = $request->input("emergency_contact_status");
        $emergency_contact_phone = $request->input("emergency_contact_phone");
        $former_company = $request->input("former_company");
        $award = $request->input("award");
    
        // Handle file upload
        $base64Image = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getRealPath();
            $imageData = file_get_contents($image);
            $base64Image = base64_encode($imageData);
        }
    
        // Save data to the additional_data_users table
        $additionalFormModel = new AdditionalFormModel();
        $additionalFormModel->adu_form_id = 1;
        $additionalFormModel->adu_birthday = $birthday;
        $additionalFormModel->adu_region = $nationality;
        $additionalFormModel->adu_cult = $religion;
        $additionalFormModel->adu_marriage_status = $maritalstatus;
        $additionalFormModel->adu_permanent_address = $address;
        $additionalFormModel->adu_present_address = $currentaddress;
        $additionalFormModel->adu_name_contact_emergency = $emergency_contact_name;
        $additionalFormModel->adu_lastname_contact_emergency = $emergency_contact_lastname;
        $additionalFormModel->adu_relationship_contact_emergency = $emergency_contact_status;
        $additionalFormModel->adu_phone_contact_emergency = $emergency_contact_phone;
        $additionalFormModel->adu_company = $former_company;
        $additionalFormModel->adu_prize = $award;
        $additionalFormModel->adu_certificate_name = $base64Image;
        // Save additional data
        $additionalFormModel->save();
    
        // Redirect to login page after successful save
        return redirect("/login");
    }

    
    public function destroy(string $id)
    {
        //
    }
}
