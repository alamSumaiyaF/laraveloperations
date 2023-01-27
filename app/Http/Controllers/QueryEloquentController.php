<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eloquent;


class QueryEloquentController extends Controller
{
    public function foodData()
    {
        return DB::table('students')->
        join('courses','students.name','=','courses.student_name')->
        where('courses.name','Food Engieering')->
        get();
        


    }
    public function EEEData()
    {
        return DB::table('students')->
        join('courses','students.name','=','courses.student_name')->
        where('courses.name','EEE')->
        get();
        


    }  

    public function CSEData()
    {
        return DB::table('students')->
        join('courses','students.name','=','courses.student_name')->
        where('courses.name','CSE')->
        get();
        


    }

    public function leatherData()
    {
        return DB::table('students')->
        join('courses','students.name','=','courses.student_name')->
        where('courses.name','Leather Engineering')->
        get();
    }

    
    

    public function allData(){
        return "dhhd";
    }

    
    



public function grouping()
{   
    echo "<h3>Total Marks of every student</h3>";
    $result=DB::table('marks')->selectRaw('sum(number),student_name,course')
    ->groupBy('student_name','course')
    ->get();
    echo $result;
    
}

public function largestLeastFunction()
{   
    echo "<h3>Largest to least mark sequentially</h3>";
    $largeorder=DB::table('marks')->orderBy('number','asc')
    ->select('student_name','course','number')
    ->get();
    echo $largeorder;
    
    echo "<br><br><br><br><br><br>";
    echo "<h3>Least to largest mark sequentially</h3>";
    $order=DB::table('marks')->orderBy('number','asc')
    ->select('student_name','course','number')
    ->get();
    echo $order;
    
    
   
}
}
