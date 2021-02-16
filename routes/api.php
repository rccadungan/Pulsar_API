<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;//Use StudentController
use App\Http\Controllers\StudentProfileController;//Use StudentProfileController
use App\Http\Controllers\NotifTypeController;//Use NotifTypeController
use App\Http\Controllers\NotificationController;//Use NotificationController
use App\Http\Controllers\DepartmentController;//Use DepartmentController
use App\Http\Controllers\ClearanceController;//Use ClearanceController
use App\Http\Controllers\PreRegisteredSubjectDetailController;//Use PreRegisteredSubjectDetailController



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

//Get specific 'students_profiles' table data using the unique ID. 
Route::get('studentProfile/{id}', [StudentProfileController::class, 'getStudentProfileById']);

//Add student to the 'students_profiles' table. 
Route::post('addStudentProfile', [StudentProfileController::class, 'addStudentProfile']);

//Update a specific student data in the 'students_profiles' table using the uniques ID. 
Route::put('updateStudentProfile/{id}', [StudentProfileController::class, 'updateStudentProfile']);

//Delete a specific student data in the 'students_profiles' table using the uniques ID. 
Route::delete('deleteStudentProfile/{id}', [StudentProfileController::class, 'deleteStudentProfile']);



//Notif Type Table
//Get all 'notif_types' table data. 
Route::get('/notifTypes', [NotifTypeController::class, 'getNotifType']);

//Get specific 'notif_types' table data using the unique ID. 
Route::get('notifType/{id}', [NotifTypeController::class, 'getNotifTypeById']);

//Add notification type to the 'notif_types' table. 
Route::post('addNotifType', [NotifTypeController::class, 'addNotifType']);

//Update a specific notification type in the 'notif_types' table using the uniques ID. 
Route::put('updateNotifType/{id}', [NotifTypeController::class, 'updateNotifType']);

//Delete a specific notification type in the 'notif_types' table using the uniques ID. 
Route::delete('deleteNotifType/{id}', [NotifTypeController::class, 'deleteNotifType']);



//Notification Table
//Get all 'notifications' table data. 
Route::get('/notifications', [NotificationController::class, 'getNotification']);

//Get specific 'notifications' table data using the unique ID. 
Route::get('notification/{id}', [NotificationController::class, 'getNotificationByID']);

//Add notification to the 'notifications' table. 
Route::post('addNotification', [NotificationController::class, 'addNotification']);

//Update a specific notification in the 'notifications' table using the uniques ID. 
Route::put('updateNotification/{id}', [NotificationController::class, 'updateNotification']);

//Delete a specific notification in the 'notifications' table using the uniques ID. 
Route::delete('deleteNotification/{id}', [NotificationController::class, 'deleteNotification']);



//Department Table
//Get all 'departments' table data. 
Route::get('/departments', [DepartmentController::class, 'getDepartment']);

//Get specific 'departments' table data using the unique ID. 
Route::get('department/{id}', [DepartmentController::class, 'getDepartmentByID']);

//Add department to the 'departments' table. 
Route::post('addDepartment', [DepartmentController::class, 'addDepartment']);

//Update a specific department in the 'departments' table using the uniques ID. 
Route::put('updateDepartment/{id}', [DepartmentController::class, 'updateDepartment']);

//Delete a specific department in the 'departments' table using the uniques ID. 
Route::delete('deleteDepartment/{id}', [DepartmentController::class, 'deleteDepartment']);



//Clearance Table
//Get all 'clearances' table data. 
Route::get('/clearances', [ClearanceController::class, 'getClearance']);

//Get specific 'clearances' table data using the unique ID. 
Route::get('clearance/{id}', [ClearanceController::class, 'getClearanceByID']);

//Add clearance to the 'clearances' table. 
Route::post('addClearance', [ClearanceController::class, 'addClearance']);

//Update a specific clearance in the 'clearances' table using the uniques ID. 
Route::put('updateClearance/{id}', [ClearanceController::class, 'updateClearance']);

//Delete a specific clearance in the 'clearances' table using the uniques ID. 
Route::delete('deleteClearance/{id}', [ClearanceController::class, 'deleteClearance']);



//Pre Registered Subject Details Table
//Get all 'pre_registered_subject_details' table data. 
Route::get('/preRegisteredSubjectDetails', [PreRegisteredSubjectDetailController::class, 'getPreRegisteredSubjectDetail']);

//Get specific 'pre_registered_subject_details' table data using the unique ID. 
Route::get('preRegisteredSubjectDetail/{id}', [PreRegisteredSubjectDetailController::class, 'getPreRegisteredSubjectDetailByID']);

//Add pre registered subject detail to the 'pre_registered_subject_details' table. 
Route::post('addPreRegisteredSubjectDetail', [PreRegisteredSubjectDetailController::class, 'addPreRegisteredSubjectDetail']);

//Update a specific pre registered subject detail in the 'pre_registered_subject_details' table using the uniques ID. 
Route::put('updatePreRegisteredSubjectDetail/{id}', [PreRegisteredSubjectDetailController::class, 'updatePreRegisteredSubjectDetail']);

//Delete a specific pre registered subject detail in the 'pre_registered_subject_details' table using the uniques ID. 
Route::delete('deletePreRegisteredSubjectDetail/{id}', [PreRegisteredSubjectDetailController::class, 'deletePreRegisteredSubjectDetail']);


