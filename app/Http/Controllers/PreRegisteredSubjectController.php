<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegisteredSubject; //Use the PreRegisteredSubject Model.

class PreRegisteredSubjectController extends Controller
{
        //This public function will get all the 'pre_registered_subjects' table data. 
        public function getPreRegisteredSubject() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students pre-registered subjects',
                'data' => PreRegisteredSubject::all()]);
        }
    
        //This public function will get specific 'pre_registered_subjects' table data using the unique ID. 
        public function getPreRegisteredSubjectByID($id) {
            $pre_registered_subject = PreRegisteredSubject::find($id);
            if (is_null($pre_registered_subject)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registered Subject not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved studen pre-registered subject',
                'data' => $pre_registered_subject::find($id)]);
        }
        
        //This public function will add new pre registered subject to the 'pre_registered_subjects' table.
        public function addPreRegisteredSubject(Request $request) {
            $pre_registered_subject = PreRegisteredSubject::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student pre-registered subject',
                'data' => $pre_registered_subject]);
        }
    
        //This public function will update a specific pre registered subject to the 'pre_registered_subjects' table using the unique ID.
        public function updatePreRegisteredSubject(Request $request, $id) {
            $pre_registered_subject = PreRegisteredSubject::find($id);
            if (is_null($pre_registered_subject)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registered Subject not found']);
            }
            $pre_registered_subject->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student pre-registered subject',
                'data' => $pre_registered_subject]);
        }
    
        //This function will delete a specific pre registered subject in the 'pre_registered_subjects' table. 
        public function deletePreRegisteredSubject(Request $request, $id) {
            $pre_registered_subject = PreRegisteredSubject::find($id);
            if (is_null($pre_registered_subject)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registered Subject not found']);
            }
            $pre_registered_subject ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student pre-registered subject',
                'data' => null]);
        }
}
