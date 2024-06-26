<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\FormsRoles;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class formsController extends Controller
{
    // Show the form for creating a new resource
    public function index()
    {
        // You can pass any necessary data to the form view here
        return view('makeRound');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate form data
        $validatedFormsData = $request->validate([
            'form_hr_id' => 'required',
            'form_title' => 'required',
            'form_location' => 'required',
            'form_comment' => 'nullable',
            'form_created_at' => 'required|date',
            'form_expired_at' => 'required|date|after_or_equal:form_created_at',
        ]);

        // Generate a unique token for the form
        $newtoken = Str::random(9);
        // Check if the column 'form_token' contains $newtoken
        $oldtoken = DB::table('forms')->where('form_token', '=', $newtoken)->get();
        // Generate until it's not a duplicate
        while ($oldtoken == $newtoken) {
            $newtoken = Str::random(9);
        }

        // Add the token and update time to the validated data
        $validatedFormsData['form_updated_at'] = $validatedFormsData['form_created_at'];
        $validatedFormsData['form_token'] = $newtoken;

        // Convert checkboxes to boolean values
        $isEmployee = $request->input('form_is_employee');
        $isCooperative = $request->input('form_is_cooperative');
        $validatedFormsData['form_is_employee'] = $isEmployee ? 1 : 0;
        $validatedFormsData['form_is_cooperative'] = $isCooperative ? 1 : 0;

        // Store the roles as a JSON array
        // $roles = $request->input('roles', []);
        $roles = $request->input('roles', []);
        $validatedFormsData['form_ro_id'] = $roles;

        // Create a new form record
        $forms = Forms::create($validatedFormsData);

        // Generate QR codes for selected roles
        $qrCodes = [];

        // URL ของโลโก้ QR
        $logoUrl = 'https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihZumRE9fBg7HKluIPhTqbb3q3-gmEdPvUhtM52MbB6JUFPqh8CauplV7cBMkQIci41IF2XLNuW_8Oo4QW5Fi_bqMLKHnftRLA=w1910-h885';

        foreach ($roles as $role) {
            // Check if the checkbox is checked
            if (in_array($role, $request->roles)) {
                $link = "http://10.80.6.165/cluster9/form/$forms->form_token/$role";
                $filename = "qr_code_$forms->form_token" . "_$role.png"; // Unique filename for each QR code
                $logoContent = file_get_contents($logoUrl); // ดึงรูปภาพโลโก้จาก URL

                QrCode::format('png')
                    ->mergeString($logoContent, 0.3, true) // ใช้โลโก้จาก URL และใส่ลงใน QR code
                    ->errorCorrection('H')
                    ->size(200)
                    ->generate($link, public_path('qrcodes/' . $filename));
            }
        }

        // 1 QR for all roles
        $link = "http://10.80.6.165/cluster9/form/$forms->form_token/all";
        $filename = "qr_code_$forms->form_token" . "_all.png"; // Unique filename for each QR code
        $logoContent = file_get_contents($logoUrl); // ดึงรูปภาพโลโก้จาก URL

        QrCode::format('png')
            ->mergeString($logoContent, 0.3, true) // ใช้โลโก้จาก URL และใส่ลงใน QR code
            ->errorCorrection('H')
            ->size(200)
            ->generate($link, public_path('qrcodes/' . $filename));

        // return redirect('/makeRound');
        return view("makeRound", compact("forms"));
    }

     /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        // Find the form by form_token
        $forms = Forms::where('form_token', $id)->first(); // Use first() to execute the query and get a single result

        // Check if the form was found
        if ($forms === null) {
            // If the form doesn't exist, redirect back to the forms page
            return redirect('/forms');
        } else {
            // If the form exists, return the edit view with the form data
            return view("makeRound", compact("forms"));
        }
    }

    // Show the form for editing the specified resource
    public function edit(String $id)
    {
        // Find the form by form_token
        $forms = Forms::where('form_token', $id)->first(); // Use first() to execute the query and get a single result

        // Check if the form was found
        if ($forms === null) {
            // If the form doesn't exist, redirect back to the forms page
            return redirect('/forms');
        } else {
            // If the form exists, return the edit view with the form data
            return view("editRound", compact("forms"));
        }
    }

    // Update the specified resource in storage
    public function update(Request $request, String $id)
    {

        $title = $request->input('title');
        $location = $request->input('location');
        $start_date = $request->input('Start_date');
        $end_date = $request->input('End_date');
        $comment = $request->input('comment');

        // $forms = Forms::findOrFail($id);
        $forms = Forms::where('form_token', $id)->first();

        $forms->form_title = $title;
        $forms->form_location = $location;
        $forms->form_created_at = $start_date;
        $forms->form_expired_at = $end_date;
        $forms->form_comment = $comment;

        // Update other fields as needed
        $forms->save();


        return redirect()->back()->with('success', 'Form updated successfully.');
    }
}
