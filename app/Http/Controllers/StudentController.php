<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //Use the Student Model.
use Illuminate\Support\Facades\Hash; // Import Hash

class StudentController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $student = Student::where('email', $email)
            ->where('password', Hash::make($password))
            ->first();
        if ($student) {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Login successful',
                'data' => $student
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'statusCode' => 404,
                'message' => 'Invalid credentials',
                'data' => null
            ], 404); 
        }
    }

    //This public function will get all the 'students' table data. 
    public function getStudent() {
        return response()->json([
            'success' => true,
            'statusCode' => 200,
            'message' => 'Successfully retrieved students data',
            'data' => Student::all()]);
    }

    //This public function will get specific 'students' table data using the unique ID. 
    public function getStudentById($id) {
        $student = Student::find($id);
        if (is_null($student)) {
            return response()->json([
                'success' => false,
                'statusCode' => 404,
                'message' => 'Student not found']);
        }
        return response()->json([
            'success' => true,
            'statusCode' => 200,
            'message' => 'Successfully retrieved student data',
            'data' => $student::find($id)]);
    }
    
    //This public function will add new student data to the 'students' table.
    public function addStudent(Request $request) {
        $student = Student::create($request->all());
        return response()->json([
            'success' => true,
            'statusCode' => 201,
            'message' => 'Successfully added student',
            'data' => $student]);
    }

    //This public function will update a specific student data to the 'students' table using the unique ID.
    public function updateStudent(Request $request, $id) {
        $student = Student::find($id);
        if (is_null($student)) {
            return response()->json([
                'success' => false,
                'statusCode' => 404,
                'message' => 'Student not found']);
        }
        $student->update($request->all());
        return response([
            'success' => true,
            'statusCode' => 200,
            'message' => 'Successfully updated student data',
            'data' => $student]);
    }

    //This function will delete a specific student data in the 'students' table. 
    public function deleteStudent(Request $request, $id) {
        $student = Student::find($id);
        if (is_null($student)) {
            return response()->json([
                'success' => false,
                'statusCode' => 404,
                'message' => 'Student not found']);
        }
        $student->delete();
        return response()->json([
            'success' => true,
            'statusCode' => 204,
            'message' => 'Successfully deleted student data',
            'data' => null]);
    }
    
}
