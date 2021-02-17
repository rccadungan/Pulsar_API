<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment; //Use the Assessment Model.

class AssessmentController extends Controller
{
        //This public function will get all the 'assessments' table data. 
        public function getAssessment() {
            return response()->json(Assessment::all(), 200);
        }
    
        //This public function will get specific 'assessments' table data using the unique ID. 
        public function getAssessmentByID($id) {
            $assessment = Assessment::find($id);
            if (is_null($assessment)) {
                return response()->json(['message' => 'Assessment not found'], 404);
            }
            return response()->json($assessment::find($id), 200);
        }
        
        //This public function will add new assessment to the 'assessments' table.
        public function addAssessment(Request $request) {
            $assessment = Assessment::create($request->all());
            return response()->json($assessment, 201);
        }
    
        //This public function will update a specific assessment to the 'assessments' table using the unique ID.
        public function updateAssessment(Request $request, $id) {
            $assessment = Assessment::find($id);
            if (is_null($assessment)) {
                return response()->json(['message' => 'Assessment not found'], 404);
            }
            $assessment->update($request->all());
            return response($assessment, 200);
        }
    
        //This function will delete a specific assessment in the 'assessments' table. 
        public function deleteAssessment(Request $request, $id) {
            $assessment = Assessment::find($id);
            if (is_null($assessment)) {
                return response()->json(['message' => 'Assessment not found'], 404);
            }
            $assessment ->delete();
            return response()->json(null, 204);
        }
}
