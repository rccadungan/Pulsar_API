<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentProfile; //Use the Student Profile Model.

class StudentProfileController extends Controller
{
        //This public function will get all the 'student_profiles' table data. 
        public function getStudentProfile() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students profiles',
                'data' => StudentProfile::all()]);
        }
    
        //This public function will get specific 'students_profiles' table data using the unique ID. 
        public function getStudentProfileById($id) {
            $student_profile = StudentProfile::find($id);
            if (is_null($student_profile)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Student Profile not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student profile',
                'data' => $student_profile::find($id)]);
        }
        
        //This public function will add new student data to the 'students_profiles' table.
        public function addStudentProfile(Request $request) {
            $student_profile = StudentProfile::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student profile',
                'data' => $student_profile]);
        }
    
        //This public function will update a specific student data to the 'students_profiles' table using the unique ID.
        public function updateStudentProfile(Request $request, $id) {
            $student_profile = StudentProfile::find($id);
            if (is_null($student_profile)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Student Profile not found']);
            }
            $student_profile->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student profile',
                'data' => $student_profile]);
        }
    
        //This function will delete a specific student data in the 'students_profiles' table. 
        public function deleteStudentProfile(Request $request, $id) {
            $student_profile = StudentProfile::find($id);
            if (is_null($student_profile)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Student Profile not found']);
            }
            $student_profile->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student profile',
                'data' => null]);
        }
}
