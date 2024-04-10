<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aduModel;
;
class formAdditionController extends Controller
{
    public function show($id)
    {
        $additionalData = aduModel::findOrFail($id);
        return view('showFormAddition', compact('additionalData'));
    }
}
