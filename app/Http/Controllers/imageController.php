<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\basicFormModel;

class imageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size: 2MB
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageData = file_get_contents($image->getRealPath());
            $base64Image = base64_encode($imageData);

            $imageModel = new basicFormModel(); 
            $imageModel->image_blob = $base64Image;
            $imageModel->save();

            return redirect()->back()->with('success', 'Image uploaded successfully!');
        }

        return redirect()->back()->with('error', 'Failed to upload image.');
    }
}