<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tableDataModel;

class tableDataController extends Controller
{
    public function index(Request $request)
    {
        $formId = $request->input('form_id');
        $applicants = tableDataModel::where('bdu_form_id', $formId)->with('role')->get();
        return view('tableData', compact('applicants'));
    }
}