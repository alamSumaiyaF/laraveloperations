<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QueryEloquentController;
use App\Http\Controllers\DeleteAllController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RelationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inputstudent','inputstudent');
Route::post('/inserttstudent',[StudentController::class,'addData']);
Route::get('/showstudent',[StudentController::class,'showData']);
Route::get('/deletestudent/{id}',[StudentController::class,'deleteData']);
Route::get('/updatestudent/{id}',[StudentController::class,'updateData']);
Route::post('/editstudent',[StudentController::class,'editData']);
Route::view('/searchstudent','searchstudent');
Route::post('/searchstudentresult',[StudentController::class,'searchData']);

Route::view('/inputcourse','inputcourse');
Route::post('/inserttcourse',[CourseController::class,'addData']);
Route::get('/showcourse',[CourseController::class,'showData']);
Route::get('/deletecourse/{id}',[CourseController::class,'deleteData']);
Route::get('/updatecourse/{id}',[CourseController::class,'updateData']);
Route::post('/editcourse',[CourseController::class,'editData']);


Route::get('/joinFood',[QueryEloquentController::class,'foodData']);
Route::get('/joinEEE',[QueryEloquentController::class,'EEEData']);
Route::get('/joinCSE',[QueryEloquentController::class,'CSEData']);
Route::get('/joinLeather',[QueryEloquentController::class,'leatherData']);
Route::get('/joinAll',[QueryEloquentController::class,'allData']);
Route::get('/deleteall',[DeleteAllController::class,'deleteAll']);
Route::get('/deletealldata/{id}',[DeleteAllController::class,'deleteData']);


Route::view('inputmark','inputmark');
Route::post('/inserttmark',[MarkController::class,'addData']);
Route::get('/totalMark',[QueryEloquentController::class,'grouping']);
Route::get('/markbyOrder',[QueryEloquentController::class,'largestLeastFunction']);

















