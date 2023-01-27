<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function addData (Request $req)
    {

      $data=new Course;
      $data->name=$req->name;
      $data->student_name=$req->student_name;
      $data->save();
      return "Data has been saved in database";

    }

    public function showData()
    {
       $data=Course::all();
       return view('showcourse',['items'=>$data]);



    }

    public function deleteData($id)
    {
       $data=Course::find($id);
       $data->delete();
       return redirect()->back();


    }
    public function updateData($id)
    {
       $data=Course::find($id);
       return view('updatecourse',['item'=>$data]);


    }
    public function editData(Request $req)
    {
       $data=Course::find($req->id);
       $data->name=$req->name;
      $data->student_name=$req->student_name;
      $data->save();
      return redirect()->back();
       


    }



}
