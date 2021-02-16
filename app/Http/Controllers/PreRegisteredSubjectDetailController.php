<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegisteredSubjectDetail; //Use the PreRegisteredSubjectDetail Model.

class PreRegisteredSubjectDetailController extends Controller
{
        //This public function will get all the 'pre_registered_subject_details' table data. 
        public function getPreRegisteredSubjectDetail() {
            return response()->json(PreRegisteredSubjectDetail::all(), 200);
        }
    
        //This public function will get specific 'pre_registered_subject_details' table data using the unique ID. 
        public function getPreRegisteredSubjectDetailByID($id) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::find($id);
            if (is_null($pre_registered_subject_detail)) {
                return response()->json(['message' => 'Pre-registered Subject Detail not found'], 404);
            }
            return response()->json($pre_registered_subject_detail::find($id), 200);
        }
        
        //This public function will add new pre registered subject detail to the 'pre_registered_subject_details' table.
        public function addPreRegisteredSubjectDetail(Request $request) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::create($request->all());
            return response()->json($pre_registered_subject_detail, 201);
        }
    
        //This public function will update a specific pre registered subject detail to the 'pre_registered_subject_details' table using the unique ID.
        public function updatePreRegisteredSubjectDetail(Request $request, $id) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::find($id);
            if (is_null($pre_registered_subject_detail)) {
                return response()->json(['message' => 'Pre-registered Subject Detail not found'], 404);
            }
            $pre_registered_subject_detail->update($request->all());
            return response($pre_registered_subject_detail, 200);
        }
    
        //This function will delete a specific pre registered subject detail in the 'pre_registered_subject_details' table. 
        public function deletePreRegisteredSubjectDetail(Request $request, $id) {
            $pre_registered_subject_detail = PreRegisteredSubjectDetail::find($id);
            if (is_null($pre_registered_subject_detail)) {
                return response()->json(['message' => 'Pre-registered Subject Detail not found'], 404);
            }
            $pre_registered_subject_detail ->delete();
            return response()->json(null, 204);
        }
}
