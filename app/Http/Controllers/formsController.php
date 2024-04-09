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
        return view('createform');
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
            'form_type' => 'required',
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

        // Store the roles as a JSON array in database
        $roles = $request->input('roles', []);
        $validatedFormsData['form_ro_id'] = $roles;

        // Create a new form record
        $forms = Forms::create($validatedFormsData);

        // Generate QR codes for selected roles
        $qrCodes = [];
        // 1 QR per 1 roles
        foreach ($roles as $role) {
            // Check if the checkbox is checked
            if (in_array($role, $request->roles)) {
                $link = "http://10.80.6.165/cluster9/$forms->form_token/$role";
                $filename = "qr_code_$forms->form_token + _$role.png"; // Unique filename for each QR code
                QrCode::format('png')->merge('qrcodes/logo.png', 0.3, true)->errorCorrection('H')
                ->size(200)->generate($link, public_path('qrcodes/' . $filename));
                $qrCodes[] = asset('qrcodes/' . $filename);
            }
        }
        // 1 QR for all roles
        $link = "http://10.80.6.165/cluster9/$forms->form_token";
        $filename = "qr_code_$forms->form_token + _all.png"; // Unique filename for each QR code
        QrCode::format('png')->merge('qrcodes/logo.png', 0.3, true)->errorCorrection('H')
        ->size(200)->generate($link, public_path('qrcodes/' . $filename));
        $qrCodes[] = asset('qrcodes/' . $filename);

        return view('qrCode', compact('qrCodes'));
    }

    // Display the specified resource
    public function show(String $id)
    {
        $forms = Forms::findOrFail($id);
        return view('editRound', compact('forms'));
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

        $forms -> form_title = $title;
        $forms -> form_location = $location;
        $forms -> form_created_at = $start_date;
        $forms -> form_expired_at = $end_date;
        $forms -> form_comment = $comment;

        // Update other fields as needed
        $forms->save();

        return redirect()->back()->with('success', 'Form updated successfully.');
    }
}
