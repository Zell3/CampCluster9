<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tableDataModel;
use Illuminate\Support\Facades\Response;

class formPrimaryController extends Controller
{
    public function show($id)
    {
        $basicData = tableDataModel::findOrFail($id);
        return view('formPrimary', compact('basicData'));
    }


    
    public function showResume($id){
        echo "ID : ", $id;
        $basicData = tableDataModel::findOrFail($id);
        $resumeData = $basicData->bdu_resume_name;
        $name = $basicData->bdu_name;
        $fileName = 'resume_'.$name.'.pdf';
        $mimeType = 'application/pdf';
    
        // Change 'inline' to 'attachment' to force the download of the file
        return response()->make($resumeData, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'attachment; filename="' .$fileName.'"'
        ]);
    }
    
    
}
