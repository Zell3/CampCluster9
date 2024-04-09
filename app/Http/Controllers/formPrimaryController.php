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
    //     $applicant = tableDataModel::findOrFail($id);

    //     // ดึงข้อมูลไฟล์ PDF จากฐานข้อมูล (blob)
    //     $pdfData = $applicant->bdu_resume_file;

    //     // แปลงข้อมูลให้เป็น binary data
    //     $pdfBinaryData = stream_get_contents($pdfData);

    //     // กำหนดชื่อไฟล์
    //     $filename = $applicant->bdu_resume_name;

    //     // สร้าง response สำหรับการดาวน์โหลด
    //     return response($pdfBinaryData)
    //         ->header('Content-Type', 'application/pdf')
    //         ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    // }
}
