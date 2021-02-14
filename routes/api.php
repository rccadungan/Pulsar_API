<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;//Use StudentController
use App\Http\Controllers\StudentProfileController;//Use StudentProfileController


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

//Delete a specific student data in the 'students' table using the uniques ID. 
Route::delete('deleteStudent/{id}', [StudentController::class, 'deleteStudent']);


//Student Profile Table
//Get all 'student_profiles' table data. 
Route::get('/studentProfiles', [StudentProfileController::class, 'getStudentProfile']);

//Get specific 'students_profiles'' table data using the unique ID. 
Route::get('studentProfile/{id}', [StudentProfileController::class, 'getStudentProfileById']);

//Add student to the 'students_profiles'' table. 
Route::post('addStudentProfile', [StudentProfileController::class, 'addStudentProfile']);

//Update a specific student data in the 'students_profiles'' table using the uniques ID. 
Route::put('updateStudentProfile/{id}', [StudentProfileController::class, 'updateStudentProfile']);

//Delete a specific student data in the 'students_profiles'' table using the uniques ID. 
Route::delete('deleteStudentProfile/{id}', [StudentProfileController::class, 'deleteStudentProfile']);

