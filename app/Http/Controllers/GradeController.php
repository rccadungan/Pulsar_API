<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grades; //Use the Grades Model.

class GradeController extends Controller
{
        //This public function will get all the 'grades' table data. 
        public function getGrade() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students grades',
                'data' => Grades::all()]);
        }
    
        //This public function will get specific 'grades' table data using the unique ID. 
        public function getGradeByID($id) {
            $grade = Grades::find($id);
            if (is_null($grade)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Grade not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student grade',
                'data' => $grade::find($id)]);
        }
        
        //This public function will add new grade to the 'grades' table.
        public function addGrade(Request $request) {
            $grade = Grades::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully updated student grade',
                'data' => $grade]);
        }
    
        //This public function will update a specific grade to the 'grades' table using the unique ID.
        public function updateGrade(Request $request, $id) {
            $grade = Grades::find($id);
            if (is_null($grade)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Grade not found']);
            }
            $grade->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student grade',
                'data' => $grade]);
        }
    
        //This function will delete a specific grade in the 'grades' table. 
        public function deleteGrade(Request $request, $id) {
            $grade = Grades::find($id);
            if (is_null($grade)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Grade not found']);
            }
            $grade ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student grade',
                'data' => null]);
        }
}
