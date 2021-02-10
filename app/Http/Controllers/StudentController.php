<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //Use the Student Model.

class StudentController extends Controller
{
        //This public function will get all the 'students' table data. 
        public function getStudent() {
            return response()->json(Student::all(), 200);
        }
    
        //This public function will get specific 'students' table data using the unique ID. 
        public function getStudentById($id) {
            $student = Student::find($id);
            if (is_null($student)) {
                return response()->json(['message' => 'Student not found'], 404);
            }
            return response()->json($student::find($id), 200);
        }
        
        //This public function will add new student data to the 'students' table.
        public function addStudent(Request $request) {
            $student = Student::create($request->all());
            return response()->json($student, 201);
        }
    
        //This public function will update a specific student data to the 'students' table using the unique ID.
        public function updateStudent(Request $request, $id) {
            $student = Student::find($id);
            if (is_null($student)) {
                return response()->json(['message' => 'Student not found'], 404);
            }
            $student->update($request->all());
            return response($student, 200);
        }
    
        public function deleteStudent(Request $request, $id) {
            $student = Student::find($id);
            if (is_null($student)) {
                return response()->json(['message' => 'Student not found'], 404);
            }
            $student->delete();
            return response()->json(null, 204);
        }
    
}
