<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; //Use the Department Model.

class DepartmentController extends Controller
{
        //This public function will get all the 'departments' table data. 
        public function getDepartment() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved clearances departments',
                'data' => Department::all()]);
        }
    
        //This public function will get specific 'departments' table data using the unique ID. 
        public function getDepartmentByID($id) {
            $department = Department::find($id);
            if (is_null($department)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Department not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved clearance department',
                'data' => $department::find($id)]);
        }
        
        //This public function will add new department to the 'departments' table.
        public function addDepartment(Request $request) {
            $department = Department::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added clearance department',
                'data' => $department]);
        }
    
        //This public function will update a specific department to the 'departments' table using the unique ID.
        public function updateDepartment(Request $request, $id) {
            $department = Department::find($id);
            if (is_null($department)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Department not found']);
            }
            $department->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated clearance department',
                'data' => $department]);
        }
    
        //This function will delete a specific department in the 'departments' table. 
        public function deleteDepartment(Request $request, $id) {
            $department = Department::find($id);
            if (is_null($department)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Department not found']);
            }
            $department ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted clearance department',
                'data' => null]);
        }
}
