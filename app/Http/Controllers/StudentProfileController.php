<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentProfile; //Use the Student Profile Model.

class StudentProfileController extends Controller
{
        //This public function will get all the 'student_profiles' table data. 
        public function getStudentProfile() {
            return response()->json(StudentProfile::all(), 200);
        }
    
        //This public function will get specific 'students_profiles' table data using the unique ID. 
        public function getStudentProfileById($id) {
            $student_profile = StudentProfile::find($id);
            if (is_null($student_profile)) {
                return response()->json(['message' => 'Student not found'], 404);
            }
            return response()->json($student_profile::find($id), 200);
        }
        
        //This public function will add new student data to the 'students_profiles' table.
        public function addStudentProfile(Request $request) {
            $student_profile = StudentProfile::create($request->all());
            return response()->json($student_profile, 201);
        }
    
        //This public function will update a specific student data to the 'students_profiles' table using the unique ID.
        public function updateStudentProfile(Request $request, $id) {
            $student_profile = StudentProfile::find($id);
            if (is_null($student_profile)) {
                return response()->json(['message' => 'Student not found'], 404);
            }
            $student_profile->update($request->all());
            return response($student_profile, 200);
        }
    
        //This function will delete a specific student data in the 'students_profiles' table. 
        public function deleteStudentProfile(Request $request, $id) {
            $student_profile = StudentProfile::find($id);
            if (is_null($student_profile)) {
                return response()->json(['message' => 'Student not found'], 404);
            }
            $student_profile->delete();
            return response()->json(null, 204);
        }
}
