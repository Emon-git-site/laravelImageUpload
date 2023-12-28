<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageUploadController extends Controller
{
    public function imageUpload(){
        return view('imageUpload');
    }
}
