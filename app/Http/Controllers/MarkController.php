<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use Validator;

class MarkController extends Controller
{
    public function addData (Request $req)
    {

      $data=new Mark;
      $data->id=$req->id;
      $data->student_name=$req->student_name;
      $data->number=$req->number;
      $data->subject_name=$req->subject_name;
      $data->course=$req->course;
      $data->highest_mark=$req->highest_mark;
      $data->photo_of_student=$req->photo_of_student;
      $data->date_of_mark_submission=$req->date_of_mark_submission;
      $data->save();
      if($data->number>"100")
      {
        $data->delete();
        return "INVALID INPUT .......  Marks can't be more than 100 ";
      }

    }

    public function getApi()
    {
       return Mark::all();

    }
    
    public function postApi(Request $req)
    {
       $input=$req->all();
       $rules=array(
        "student_name"=>"required|string",
        "number"=>"required|integer|between:40,100",
        "subject_name"=>"required|string",
        "course"=>"required|string",
        "highest_mark"=>"integer|between:40,100",
        "photo_of_student"=>"image|file|between:100,5000|dimentions:min_width=100,
        min_height=100",
        "date_of_mark_submission"=>"date_format:d/m/y|after:19/09/2022"
       );
       $messages=array(
         "required"=>"The :attribute is empty",
         "date_format"=>"Please follow the accurate date format such as date/month/year AND the date has to be after 19/09/2022",
         "after"=>"The date has to be after 19/09/2022",
         "number.between"=>"Either Failed OR It has exceeded the limitation of number, marks has to be between 40 to 100"
         
       );
       $validator=Validator::make($input,$rules,$messages,["course"=>
       "Name of your Course/Department/Major"]);
       if($validator->fails())
       {
        return $validator->errors();
       }
       else
       {
       $data=new Mark;
       $data->student_name=$req->student_name;
      $data->number=$req->number;
      $data->subject_name=$req->subject_name;
      $data->course=$req->course;
      $data->highest_mark=$req->highest_mark;
      $data->photo_of_student=$req->photo_of_student;
      $data->date_of_mark_submission=$req->date_of_mark_submission;
      $result=$data->save();
      if($result)
      {
        return ["Result"=>"Data has been saved"];
      }
      else
      {
        return ["Result"=>"Data can NOT be entered"];
      }
       }
       
    }

    public function searchApi($search)
    {
      return Mark::where('subject_name',"like",'%'.$search.'%')
      ->orWhere('student_name',"like",'%'.$search.'%')
      ->orWhere('course',"like",'%'.$search.'%')
      ->get();
    }

    public function deleteApi($delete)
    {
      return Mark::where('student_name',$delete)->delete();
    }
    public function updateApi(Request $req)
    {
      $input=$req->all();
       $rules=array(
        "id"=>"required",
        "student_name"=>"string",
        "number"=>"integer|between:40,100",
        "subject_name"=>"string",
        "course"=>"string",
        "highest_mark"=>"integer|between:40,100",
        "photo_of_student"=>"image|file|between:100,5000|dimentions:min_width=100,
        min_height=100",
        "date_of_mark_submission"=>"date_format:d/m/y|after:19/09/2022"
       );
       $messages=array(
         
         "date_format"=>"Please follow the accurate date format such as date/month/year AND the date has to be after 19/09/2022",
         "after"=>"The date has to be after 19/09/2022",
         "number.between"=>"Either Failed OR It has exceeded the limitation of number, marks has to be between 40 to 100"
         
       );
       $validator=Validator::make($input,$rules,$messages,["course"=>
       "Name of your Course/Department/Major"]);
       if($validator->fails())
       {
        return $validator->errors();
       }
       else
       {
       $data=new Mark;
       $data->student_name=$req->student_name;
      $data->number=$req->number;
      $data->subject_name=$req->subject_name;
      $data->course=$req->course;
      $data->highest_mark=$req->highest_mark;
      $data->photo_of_student=$req->photo_of_student;
      $data->date_of_mark_submission=$req->date_of_mark_submission;
      $result=$data->save();
      if($result)
      {
        return ["Result"=>"Data has been UPDATED"];
      }
      else
      {
        return ["Result"=>"Data can NOT be updated"];
      }
       }
       

    }
}
