<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grades; //Use the Grades Model.

class GradeController extends Controller
{
        //This public function will get all the 'grades' table data. 
        public function getGrade() {
            return response()->json(Grade::all(), 200);
        }
    
        //This public function will get specific 'grades' table data using the unique ID. 
        public function getGradeByID($id) {
            $grade = Grade::find($id);
            if (is_null($grade)) {
                return response()->json(['message' => 'Grade not found'], 404);
            }
            return response()->json($grade::find($id), 200);
        }
        
        //This public function will add new grade to the 'grades' table.
        public function addGrade(Request $request) {
            $grade = Grade::create($request->all());
            return response()->json($grade, 201);
        }
    
        //This public function will update a specific grade to the 'grades' table using the unique ID.
        public function updateGrade(Request $request, $id) {
            $grade = Grade::find($id);
            if (is_null($grade)) {
                return response()->json(['message' => 'Grade not found'], 404);
            }
            $grade->update($request->all());
            return response($grade, 200);
        }
    
        //This function will delete a specific grade in the 'grades' table. 
        public function deleteGrade(Request $request, $id) {
            $grade = Grade::find($id);
            if (is_null($grade)) {
                return response()->json(['message' => 'Grade not found'], 404);
            }
            $grade ->delete();
            return response()->json(null, 204);
        }
}
