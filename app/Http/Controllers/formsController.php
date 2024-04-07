<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\FormsRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class formsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'form_title' => 'required',
            'form_location' => 'required',
            'form_comment' => 'nullable',
            'form_type' => 'required',
            'form_created_at' => 'required|date',
            'form_updated_at' => 'required|date',
            'form_expired_at' => 'required|date|after_or_equal:form_created_at',
            'form_is_employee' => 'nullable',
            'form_is_cooperative' => 'nullable'
        ]);

        // get checked checkbox

        $roles = $request->input('roles', []);

        foreach ($roles as $role) {
            // Check if the checkbox is checked
            if (isset($request->roles[$role])) {
                // Create on this roles
                $forms = Forms::create($validatedData);
                
                // Generate link only if the checkbox is checked
                $link = URL::signedRoute('ro', ['roles' => $role]);

                // Create a new instance for each checked role and save the link
                $formRole = new FormsRoles;
                $formRole->fr_form_id = $forms->form_id;
                $formRole->fr_ro_id = $role;
                $formRole->save();
            }
        }



        // Generate QR Code
        $qrCode = QrCode::size(200)->generate($link);
        // Update the event with the generated link
        $forms->update(['form_link' => $link]);

        return view('events.show', compact('event', 'qrCode'));
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
}
