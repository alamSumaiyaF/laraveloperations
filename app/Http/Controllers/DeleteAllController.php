<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DeleteAllController extends Controller
{
    public function deleteAll()
    {
    $data=DB::table('students')->
    join('courses','students.name','=','courses.student_name')->get();
    return view('deleteall',['stuffs'=>$data]);
    }

    public function deleteData($id)
    {
       $data=DB::table('students')->
       join('courses','students.name','=','courses.student_name')->where('id',$id)
       ->get();
       $data->delete();
       return redirect()->back();


    }
}
