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
use App\Http\Controllers\PreRegisteredSubjectController;//Use PreRegisteredSubjectController
use App\Http\Controllers\TermController;//Use TermController
use App\Http\Controllers\PreRegistrationController;//Use PreRegistrationController
use App\Http\Controllers\OneTimePasswordController;//Use OneTimePasswordController
use App\Http\Controllers\ScheduleController;//Use ScheduleController
use App\Http\Controllers\AssessmentController;//Use AssessmentController
use App\Http\Controllers\GradeController;//Use GradeController


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

Route::get('/login', [StudentController::class, 'login']);

//Student Table
//Get all 'students' table data. 
Route::get('/students', [StudentController::class, 'getStudent']);

//Get specific 'students' table data using the unique ID. 
Route::get('student/{id}', [StudentController::class, 'getStudentById']);

//Add student to the 'students' table. 
Route::post('addStudent', [StudentController::class, 'addStudent']);

//Update a specific student data in the 'students' table using the unique ID. 
Route::put('updateStudent/{id}', [StudentController::class, 'updateStudent']);

//Delete a specific student data in the 'students' table using the unique ID. 
Route::delete('deleteStudent/{id}', [StudentController::class, 'deleteStudent']);


//Student Profile Table
//Get all 'student_profiles' table data. 
Route::get('/studentProfiles', [StudentProfileController::class, 'getStudentProfile']);

//Get specific 'students_profiles' table data using the unique ID. 
Route::get('studentProfile/{id}', [StudentProfileController::class, 'getStudentProfileById']);

//Add student to the 'students_profiles' table. 
Route::post('addStudentProfile', [StudentProfileController::class, 'addStudentProfile']);

//Update a specific student data in the 'students_profiles' table using the unique ID. 
Route::put('updateStudentProfile/{id}', [StudentProfileController::class, 'updateStudentProfile']);

//Delete a specific student data in the 'students_profiles' table using the unique ID. 
Route::delete('deleteStudentProfile/{id}', [StudentProfileController::class, 'deleteStudentProfile']);

//Upload student image.
Route::post('images', [StudentProfileController::class, 'uploadImage']);



//Notif Type Table
//Get all 'notif_types' table data. 
Route::get('/notifTypes', [NotifTypeController::class, 'getNotifType']);

//Get specific 'notif_types' table data using the unique ID. 
Route::get('notifType/{id}', [NotifTypeController::class, 'getNotifTypeById']);

//Add notification type to the 'notif_types' table. 
Route::post('addNotifType', [NotifTypeController::class, 'addNotifType']);

//Update a specific notification type in the 'notif_types' table using the unique ID. 
Route::put('updateNotifType/{id}', [NotifTypeController::class, 'updateNotifType']);

//Delete a specific notification type in the 'notif_types' table using the unique ID. 
Route::delete('deleteNotifType/{id}', [NotifTypeController::class, 'deleteNotifType']);



//Notification Table
//Get all 'notifications' table data. 
Route::get('/notifications', [NotificationController::class, 'getNotification']);

//Get specific 'notifications' table data using the unique ID. 
Route::get('notification/{id}', [NotificationController::class, 'getNotificationByID']);

//Add notification to the 'notifications' table. 
Route::post('addNotification', [NotificationController::class, 'addNotification']);

//Update a specific notification in the 'notifications' table using the unique ID. 
Route::put('updateNotification/{id}', [NotificationController::class, 'updateNotification']);

//Delete a specific notification in the 'notifications' table using the unique ID. 
Route::delete('deleteNotification/{id}', [NotificationController::class, 'deleteNotification']);



//Department Table
//Get all 'departments' table data. 
Route::get('/departments', [DepartmentController::class, 'getDepartment']);

//Get specific 'departments' table data using the unique ID. 
Route::get('department/{id}', [DepartmentController::class, 'getDepartmentByID']);

//Add department to the 'departments' table. 
Route::post('addDepartment', [DepartmentController::class, 'addDepartment']);

//Update a specific department in the 'departments' table using the unique ID. 
Route::put('updateDepartment/{id}', [DepartmentController::class, 'updateDepartment']);

//Delete a specific department in the 'departments' table using the unique ID. 
Route::delete('deleteDepartment/{id}', [DepartmentController::class, 'deleteDepartment']);



//Clearance Table
//Get all 'clearances' table data. 
Route::get('/clearances', [ClearanceController::class, 'getClearance']);

//Get specific 'clearances' table data using the unique ID. 
Route::get('clearance/{id}', [ClearanceController::class, 'getClearanceByID']);

//Add clearance to the 'clearances' table. 
Route::post('addClearance', [ClearanceController::class, 'addClearance']);

//Update a specific clearance in the 'clearances' table using the unique ID. 
Route::put('updateClearance/{id}', [ClearanceController::class, 'updateClearance']);

//Delete a specific clearance in the 'clearances' table using the unique ID. 
Route::delete('deleteClearance/{id}', [ClearanceController::class, 'deleteClearance']);



//Pre Registered Subject Details Table
//Get all 'pre_registered_subject_details' table data. 
Route::get('/preRegisteredSubjectDetails', [PreRegisteredSubjectDetailController::class, 'getPreRegisteredSubjectDetail']);

//Get specific 'pre_registered_subject_details' table data using the unique ID. 
Route::get('preRegisteredSubjectDetail/{id}', [PreRegisteredSubjectDetailController::class, 'getPreRegisteredSubjectDetailByID']);

//Add pre registered subject detail to the 'pre_registered_subject_details' table. 
Route::post('addPreRegisteredSubjectDetail', [PreRegisteredSubjectDetailController::class, 'addPreRegisteredSubjectDetail']);

//Update a specific pre registered subject detail in the 'pre_registered_subject_details' table using the unique ID. 
Route::put('updatePreRegisteredSubjectDetail/{id}', [PreRegisteredSubjectDetailController::class, 'updatePreRegisteredSubjectDetail']);

//Delete a specific pre registered subject detail in the 'pre_registered_subject_details' table using the unique ID. 
Route::delete('deletePreRegisteredSubjectDetail/{id}', [PreRegisteredSubjectDetailController::class, 'deletePreRegisteredSubjectDetail']);



//Pre Registered Subjects Table
//Get all 'pre_registered_subjects' table data. 
Route::get('/preRegisteredSubjects', [PreRegisteredSubjectController::class, 'getPreRegisteredSubject']);

//Get specific 'pre_registered_subjects' table data using the unique ID. 
Route::get('preRegisteredSubject/{id}', [PreRegisteredSubjectController::class, 'getPreRegisteredSubjectByID']);

//Add pre registered subject to the 'pre_registered_subjects' table. 
Route::post('addPreRegisteredSubject', [PreRegisteredSubjectController::class, 'addPreRegisteredSubject']);

//Update a specific pre registered subject in the 'pre_registered_subjects' table using the unique ID. 
Route::put('updatePreRegisteredSubject/{id}', [PreRegisteredSubjectController::class, 'updatePreRegisteredSubject']);

//Delete a specific pre registered subject in the 'pre_registered_subjects' table using the unique ID. 
Route::delete('deletePreRegisteredSubject/{id}', [PreRegisteredSubjectController::class, 'deletePreRegisteredSubject']);



//Term Table
//Get all 'terms' table data. 
Route::get('/terms', [TermController::class, 'getTerm']);

//Get specific 'terms' table data using the unique ID. 
Route::get('term/{id}', [TermController::class, 'getTermByID']);

//Add term to the 'terms' table. 
Route::post('addTerm', [TermController::class, 'addTerm']);

//Update a specific term in the 'terms' table using the unique ID. 
Route::put('updateTerm/{id}', [TermController::class, 'updateTerm']);

//Delete a specific term in the 'terms' table using the unique ID. 
Route::delete('deleteTerm/{id}', [TermController::class, 'deleteTerm']);



//Pre-registration Table
//Get all 'pre_registrations' table data. 
Route::get('/preRegistrations', [PreRegistrationController::class, 'getPreRegistration']);

//Get specific 'pre_registrations' table data using the unique ID. 
Route::get('preRegistration/{id}', [PreRegistrationController::class, 'getPreRegistrationByID']);

//Add pre-registration to the 'pre_registrations' table. 
Route::post('addPreRegistration', [PreRegistrationController::class, 'addPreRegistration']);

//Update a specific pre-registration in the 'pre_registrations' table using the unique ID. 
Route::put('updatePreRegistration/{id}', [PreRegistrationController::class, 'updatePreRegistration']);

//Delete a specific pre-registration in the 'pre_registrations' table using the unique ID. 
Route::delete('deletePreRegistration/{id}', [PreRegistrationController::class, 'deletePreRegistration']);



//One Time Password Table
//Get all 'one_time_passwords' table data. 
Route::get('/oneTimePasswords', [OneTimePasswordController::class, 'getOneTimePassword']);

//Get specific 'one_time_passwords' table data using the unique ID. 
Route::get('oneTimePassword/{id}', [OneTimePasswordController::class, 'getOneTimePasswordByID']);

//Add one time password to the 'one_time_passwords' table. 
Route::post('addOneTimePassword', [OneTimePasswordController::class, 'addOneTimePassword']);

//Update a specific one time password in the 'one_time_passwords' table using the unique ID. 
Route::put('updateOneTimePassword/{id}', [OneTimePasswordController::class, 'updateOneTimePassword']);

//Delete a specific one time password in the 'one_time_passwords' table using the unique ID. 
Route::delete('deleteOneTimePassword/{id}', [OneTimePasswordController::class, 'deleteOneTimePassword']);



//Schedule Table
//Get all 'schedules' table data. 
Route::get('/schedules', [ScheduleController::class, 'getSchedule']);

//Get specific 'schedules' table data using the unique ID. 
Route::get('schedule/{id}', [ScheduleController::class, 'getScheduleByID']);

//Add one time schedule to the 'schedules' table. 
Route::post('addSchedule', [ScheduleController::class, 'addSchedule']);

//Update a specific one time schedule in the 'schedules' table using the unique ID. 
Route::put('updateSchedule/{id}', [ScheduleController::class, 'updateSchedule']);

//Delete a specific one time schedule in the 'schedules' table using the unique ID. 
Route::delete('deleteSchedule/{id}', [ScheduleController::class, 'deleteSchedule']);



//Assessment Table
//Get all 'assessments' table data. 
Route::get('/assessments', [AssessmentController::class, 'getAssessment']);

//Get specific 'assessments' table data using the unique ID. 
Route::get('assessment/{id}', [AssessmentController::class, 'getAssessmentByID']);

//Add one time assessment to the 'assessments' table. 
Route::post('addAssessment', [AssessmentController::class, 'addAssessment']);

//Update a specific one time assessment in the 'assessments' table using the unique ID. 
Route::put('updateAssessment/{id}', [AssessmentController::class, 'updateAssessment']);

//Delete a specific one time assessment in the 'assessments' table using the unique ID. 
Route::delete('deleteAssessment/{id}', [AssessmentController::class, 'deleteAssessment']);



//Grade Table
//Get all 'grades' table data. 
Route::get('/grades', [GradeController::class, 'getGrade']);

//Get specific 'grades' table data using the unique ID. 
Route::get('grade/{id}', [GradeController::class, 'getGradeByID']);

//Add one time grade to the 'grades' table. 
Route::post('addGrade', [GradeController::class, 'addGrade']);

//Update a specific one time grade in the 'grades' table using the unique ID. 
Route::put('updateGrade/{id}', [GradeController::class, 'updateGrade']);

//Delete a specific one time grade in the 'grades' table using the unique ID. 
Route::delete('deleteGrade/{id}', [GradeController::class, 'deleteGrade']);

