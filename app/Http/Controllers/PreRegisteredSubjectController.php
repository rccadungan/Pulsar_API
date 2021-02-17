<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegisteredSubject; //Use the PreRegisteredSubject Model.

class PreRegisteredSubjectController extends Controller
{
        //This public function will get all the 'pre_registered_subjects' table data. 
        public function getPreRegisteredSubject() {
            return response()->json(PreRegisteredSubject::all(), 200);
        }
    
        //This public function will get specific 'pre_registered_subjects' table data using the unique ID. 
        public function getPreRegisteredSubjectByID($id) {
            $pre_registered_subject = PreRegisteredSubject::find($id);
            if (is_null($pre_registered_subject)) {
                return response()->json(['message' => 'Pre-registered Subject not found'], 404);
            }
            return response()->json($pre_registered_subject::find($id), 200);
        }
        
        //This public function will add new pre registered subject to the 'pre_registered_subjects' table.
        public function addPreRegisteredSubject(Request $request) {
            $pre_registered_subject = PreRegisteredSubject::create($request->all());
            return response()->json($pre_registered_subject, 201);
        }
    
        //This public function will update a specific pre registered subject to the 'pre_registered_subjects' table using the unique ID.
        public function updatePreRegisteredSubject(Request $request, $id) {
            $pre_registered_subject = PreRegisteredSubject::find($id);
            if (is_null($pre_registered_subject)) {
                return response()->json(['message' => 'Pre-registered Subject not found'], 404);
            }
            $pre_registered_subject->update($request->all());
            return response($pre_registered_subject, 200);
        }
    
        //This function will delete a specific pre registered subject in the 'pre_registered_subjects' table. 
        public function deletePreRegisteredSubject(Request $request, $id) {
            $pre_registered_subject = PreRegisteredSubject::find($id);
            if (is_null($pre_registered_subject)) {
                return response()->json(['message' => 'Pre-registered Subject not found'], 404);
            }
            $pre_registered_subject ->delete();
            return response()->json(null, 204);
        }
}
