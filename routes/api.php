<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('apisearchStudent/{data}',[StudentController::class,'searchApi']);


Route::get('apigetMark',[MarkController::class,'getApi']);
Route::post('apipostMark',[MarkController::class,'postApi']);
Route::delete('apideleteMark/{delete}',[MarkController::class,'deleteApi']);
Route::get('apisearchMark/{search}',[MarkController::class,'searchApi']);
Route::put('apiupdateMark',[MarkController::class,'updateApi']);

