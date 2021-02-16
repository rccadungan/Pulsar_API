<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; //Use the Department Model.

class DepartmentController extends Controller
{
        //This public function will get all the 'departments' table data. 
        public function getDepartment() {
            return response()->json(Department::all(), 200);
        }
    
        //This public function will get specific 'departments' table data using the unique ID. 
        public function getDepartmentByID($id) {
            $department = Department::find($id);
            if (is_null($department)) {
                return response()->json(['message' => 'Department not found'], 404);
            }
            return response()->json($department::find($id), 200);
        }
        
        //This public function will add new department to the 'departments' table.
        public function addDepartment(Request $request) {
            $department = Department::create($request->all());
            return response()->json($department, 201);
        }
    
        //This public function will update a specific department to the 'departments' table using the unique ID.
        public function updateDepartment(Request $request, $id) {
            $department = Department::find($id);
            if (is_null($department)) {
                return response()->json(['message' => 'Department not found'], 404);
            }
            $department->update($request->all());
            return response($department, 200);
        }
    
        //This function will delete a specific department in the 'departments' table. 
        public function deleteDepartment(Request $request, $id) {
            $department = Department::find($id);
            if (is_null($department)) {
                return response()->json(['message' => 'Department not found'], 404);
            }
            $department ->delete();
            return response()->json(null, 204);
        }
}
