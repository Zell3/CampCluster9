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
    public function index()
    {
        // You can pass any necessary data to the form view here
        return view('createform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $qrCodes = [];

        // Get checked checkbox
        $roles = $request->input('roles', []);

        // Count what last round is
        $lastRound = DB::table('forms')->orderBy('form_round', 'desc')->first();
        $roundCount = $lastRound ? ($lastRound->form_round + 1) : 1;

        // Request input
        $isEmployee = $request->input('form_is_employee');
        $isCooperative = $request->input('form_is_cooperative');

        // 1 link per 1 roles
        foreach ($roles as $role) {
            // Check if the checkbox is checked
            if (in_array($role, $request->roles)) {
                // Generate link only if the checkbox is checked
                $newtoken = Str::random(9);

                // Ensure the token is unique
                while (Forms::where('form_token', $newtoken)->exists()) {
                    $newtoken = Str::random(9);
                }

                // Get data from create form page
                $validatedFormsData = $request->validate([
                    'form_hr_id' => 'required',
                    'form_title' => 'required',
                    'form_location' => 'required',
                    'form_comment' => 'nullable',
                    'form_type' => 'required',
                    'form_created_at' => 'required|date',
                    'form_expired_at' => 'required|date|after_or_equal:form_created_at',
                ]);

                $validatedFormsData['form_updated_at'] = $validatedFormsData['form_created_at'];
                $validatedFormsData['form_token'] = $newtoken;
                $validatedFormsData['form_round'] = $roundCount;

                $validatedFormsData['form_is_employee'] = $isEmployee ? 1 : 0;
                $validatedFormsData['form_is_cooperative'] = $isCooperative ? 1 : 0;

                $forms = Forms::create($validatedFormsData);

                // Create a new instance for each checked role and save the link
                $formRole = new FormsRoles;
                $formRole->fr_form_id = $forms->form_id;
                $formRole->fr_ro_id = $role;
                $formRole->save();

                $filename = "qr_code_$forms->form_token.png"; // Unique filename for each QR code
                $link = "www.exampletest.com/$forms->form_token";
                QrCode::format('png')->size(200)->generate($link, public_path('qrcodes/' . $filename));
                $qrCodes[] = asset('qrcodes/' . $filename);
            }
        }

        // All selecting roles
        // Generate link only if the checkbox is checked
        $newtoken = Str::random(9);
        // Check if the column 'form_token' contains $newtoken
        $oldtoken = DB::table('forms')->where('form_token', '=', $newtoken)->get();
        // Generate until it not duplicate old data
        while ($oldtoken == $newtoken) {
            $newtoken = Str::random(9);
        }
        $validatedFormsData = $request->validate([
            'form_hr_id' => 'required',
            'form_title' => 'required',
            'form_location' => 'required',
            'form_comment' => 'nullable',
            'form_type' => 'required',
            'form_created_at' => 'required|date',
            'form_expired_at' => 'required|date|after_or_equal:form_created_at',
        ]);

        $validatedFormsData['form_updated_at'] = $validatedFormsData['form_created_at'];
        $validatedFormsData['form_token'] = $newtoken;
        $validatedFormsData['form_round'] = $roundCount;

        $validatedFormsData['form_is_employee'] = $isEmployee ? 1 : 0;
        $validatedFormsData['form_is_cooperative'] = $isCooperative ? 1 : 0;

        $forms = Forms::create($validatedFormsData);
        foreach ($roles as $role) {
            // Check if the checkbox is checked
            if (in_array($role, $request->roles)) {
                // Create a new instance for each checked role and save the link
                $formRole = new FormsRoles;
                $formRole->fr_form_id = $forms->form_id;
                $formRole->fr_ro_id = $role;
                $formRole->save();
            }
        }

        $filename = "qr_code_$forms->form_token.png"; // Unique filename for each QR code
        $link = "www.exampletest.com/$forms->form_token";
        QrCode::format('png')->size(200)->generate($link, public_path('qrcodes/' . $filename));
        $qrCodes[] = asset('qrcodes/' . $filename);

        return view('qrCode', compact('qrCodes'));
    }

    public function show(String $id)
    {

        $forms = Forms::findOrFail($id);
        return view('edit_round', compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $forms = Forms::findOrFail($id);
        return view('edit_round', compact('forms'));


        if($forms === null){
            return redirect('/forms');
        } else{
            return view("update",compact("forms"));
        }

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {

        $title = $request->input('title');
        $location = $request->input('location');
        $start_date = $request->input('Start_date');
        $end_date = $request->input('End_date');
        $comment = $request->input('comment');

        $forms = Forms::findOrFail($id);

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
