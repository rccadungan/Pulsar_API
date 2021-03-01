<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment; //Use the Assessment Model.

class AssessmentController extends Controller
{
        //This public function will get all the 'assessments' table data. 
        public function getAssessment() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students assessments',
                'data' => Assessment::all()]);
        }
    
        //This public function will get specific 'assessments' table data using the unique ID. 
        public function getAssessmentByID($id) {
            $assessment = Assessment::find($id);
            if (is_null($assessment)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Assessment not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student assessment',
                'data' => $assessment::find($id)]);
        }
        
        //This public function will add new assessment to the 'assessments' table.
        public function addAssessment(Request $request) {
            $assessment = Assessment::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student assessment',
                'data' => $assessment]);
        }
    
        //This public function will update a specific assessment to the 'assessments' table using the unique ID.
        public function updateAssessment(Request $request, $id) {
            $assessment = Assessment::find($id);
            if (is_null($assessment)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Assessment not found']);
            }
            $assessment->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully updated student assessment',
                'data' => $assessment]);
        }
    
        //This function will delete a specific assessment in the 'assessments' table. 
        public function deleteAssessment(Request $request, $id) {
            $assessment = Assessment::find($id);
            if (is_null($assessment)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Assessment not found']);
            }
            $assessment ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student assessment',
                'data' => null]);
        }
}
