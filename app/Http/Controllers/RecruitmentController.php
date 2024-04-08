<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentModel;

class RecruitmentController extends Controller
{
    public function index()
    {
        $recruitments = RecruitmentModel::with('role')->get();
        return view('recruitmentRound', compact('recruitments'));
    } 
}
