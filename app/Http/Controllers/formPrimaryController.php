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

    // public function downloadPDF($id)
    // {
    //     $applicants = tableDataModel::findOrFail($id);
        
    //     // ดึงไฟล์ PDF จากฐานข้อมูล (blob) และแปลงเป็น binary data
    //     $pdfContent = $applicants->bdu_resume_file;

    //     // สร้าง response ด้วย binary data ของไฟล์ PDF
    //     return Response::make($pdfContent, 200, [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'inline; filename="' . $applicants->bdu_resume_name . '"'
    //     ]);
    // }
   
}
