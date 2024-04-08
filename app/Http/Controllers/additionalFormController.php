<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $file = $request->input("file");


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
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
