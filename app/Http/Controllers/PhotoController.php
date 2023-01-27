<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    
    public function addData(Request $request)
    {
        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'photos/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }
        Photo::insert([
            'image' => implode('|', $image),
            'student_name' => $request->student_name
        ]);
        return back();
    }

    function photoShow(){
        $data=Photo::all();
        return view('showphoto',['items'=>$data]);
    }
}
