<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Mark;

class RelationController extends Controller
{
    public function getRelation()
    {
    return Student::where('name','Punjan Dai')
    ->getMark;
    }
}
