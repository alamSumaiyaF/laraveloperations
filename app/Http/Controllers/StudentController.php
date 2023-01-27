<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addData (Request $req)
    {

      $data=new Student;
      $data->name=$req->name;
      $data->course_name=$req->course_name;
      $data->save();
      return "Data has been saved in database";

    }

    public function showData()
    {
       $data=Student::all();
       return view('showstudent',['collections'=>$data]);



    }

    public function deleteData($id)
    {
       $data=Student::find($id);
       $data->delete();
       return redirect()->back();


    }
    public function updateData($id)
    {
       $data=Student::find($id);
       return view('updatestudent',['item'=>$data]);


    }
    public function editData(Request $req)
    {
       $data=Student::find($req->id);
       $data->name=$req->name;
      $data->course_name=$req->course_name;
      $data->save();
      return redirect()->back();
       


    }



    public function searchApi($data)
    {
           return Student::where('name','like','%'.$data.'%')
           ->orWhere('course_name','like','%'.$data.'%')
           ->get();



    }
    public function searchData(Request $req)
    {
      $search=$req['search'] ?? "";
      if($search!="")
      {
         $result=Student::where('name','like','%'.$search.'%')
         ->orWhere('course_name','like','%'.$search.'%')
         ->get();
      }
      else{
         $result=Student::all();
      }
      return view('searchstudentresult',['results'=>$result]);
    }





}
