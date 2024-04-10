<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tableDataModel;

class tableDataController extends Controller
{
    public function index(Request $request)
    {
        $form_token = $request->input('form_token');
        $applicants = tableDataModel::where('bdu_form_token', $form_token )->with('role')->get();
        return view('tableData', compact('applicants'));
    }
}
