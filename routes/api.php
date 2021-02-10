<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;//Use StudentController

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Student Table
//Get all 'students' table data. 
Route::get('/students', [StudentController::class, 'getStudent']);

//Get specific 'students' table data using the unique ID. 
Route::get('student/{id}', [StudentController::class, 'getStudentById']);

//Add student to the 'students' table. 
Route::post('addStudent', [StudentController::class, 'addStudent']);

//Update a specific student data in the 'students' table using the uniques ID. 
Route::put('updateStudent/{id}', [StudentController::class, 'updateStudent']);

//Update a specific student data in the 'students' table using the uniques ID. 
Route::delete('deleteStudent/{id}', [StudentController::class, 'deleteStudent']);
