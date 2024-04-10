<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tableDataModel;

class tableDataController extends Controller
{
    public function index(Request $request)
    {
        $formToken = $request->input('form_token');
        $applicants = tableDataModel::where('bdu_form_token', $formToken)->with('role')->get();
        return view('tableData', compact('applicants'));
    }
}
