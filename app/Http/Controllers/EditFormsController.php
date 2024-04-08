<?php

namespace App\Http\Controllers;

use App\Models\Edit_forms;
use App\Models\Roles;
use Illuminate\Http\Request;
use Psy\Util\Str;

class EditFormsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {

        $forms = Edit_forms::findOrFail($id);
        return view('editRound', compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $forms = Edit_forms::findOrFail($id);
        return view('editRound', compact('forms'));


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

        $forms = Edit_forms::findOrFail($id);

        $forms -> form_title = $title;
        $forms -> form_location = $location;
        $forms -> form_created_at = $start_date;
        $forms -> form_expired_at = $end_date;
        $forms -> form_comment = $comment;

        // Update other fields as needed
        $forms->save();

        return redirect()->back()->with('success', 'Form updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edit_forms $id)
    {
        //
    }
}
