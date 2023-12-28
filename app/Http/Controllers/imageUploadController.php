<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageUploadController extends Controller
{
    public function imageUpload()
    {
        return view('imageUpload');
    }

    public function  imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        return back()->with('success','You have successfully upload image')
                    ->with('image', $imageName);
    }
}
