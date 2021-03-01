<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegisteredSubjectDetail; //Use the PreRegisteredSubjectDetail Model.

class PreRegisteredSubjectDetailController extends Controller
{
        //This public function will get all the 'pre_registered_subject_details' table data. 
        public function getPreRegisteredSubjectDetail() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students pre-registered subject details',
                'data' => PreRegisteredSubjectDetail::all()]);
        }
    
        //This public function will get specific 'pre_registered_subject_details' table data using the unique ID. 
        public function getPreRegisteredSubjectDetailByID($id) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::find($id);
            if (is_null($pre_registered_subject_detail)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registered Subject Details not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student pre-registered subject detail',
                'data' => $pre_registered_subject_detail::find($id)]);
        }
        
        //This public function will add new pre registered subject detail to the 'pre_registered_subject_details' table.
        public function addPreRegisteredSubjectDetail(Request $request) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student pre-registered subject detail',
                'data' => $pre_registered_subject_detail]);
        }
    
        //This public function will update a specific pre registered subject detail to the 'pre_registered_subject_details' table using the unique ID.
        public function updatePreRegisteredSubjectDetail(Request $request, $id) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::find($id);
            if (is_null($pre_registered_subject_detail)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registered Subject Details not found']);
            }
            $pre_registered_subject_detail->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student pre-registered subject detail',
                'data' => $pre_registered_subject_detail]);
        }
    
        //This function will delete a specific pre registered subject detail in the 'pre_registered_subject_details' table. 
        public function deletePreRegisteredSubjectDetail(Request $request, $id) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::find($id);
            if (is_null($pre_registered_subject_detail)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registered Subject Details not found']);
            }
            $pre_registered_subject_detail ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student pre-registered subject detail',
                'data' => null]);
        }
}
