<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegistration; //Use the PreRegistration Model.


class PreRegistrationController extends Controller
{
        //This public function will get all the 'pre_registrations' table data. 
        public function getPreRegistration() {
            return response()->json(PreRegistration::all(), 200);
        }
    
        //This public function will get specific 'pre_registrations' table data using the unique ID. 
        public function getPreRegistrationByID($id) {
            $pre_registration = PreRegistration::find($id);
            if (is_null($pre_registration)) {
                return response()->json(['message' => 'Pre-registration not found'], 404);
            }
            return response()->json($pre_registration::find($id), 200);
        }
        
        //This public function will add new pre-registration to the 'pre_registrations' table.
        public function addPreRegistration(Request $request) {
            $pre_registration = PreRegistration::create($request->all());
            return response()->json($pre_registration, 201);
        }
    
        //This public function will update a specific pre-registration to the 'pre_registrations' table using the unique ID.
        public function updatePreRegistration(Request $request, $id) {
            $pre_registration = PreRegistration::find($id);
            if (is_null($pre_registration)) {
                return response()->json(['message' => 'Pre-registration not found'], 404);
            }
            $pre_registration->update($request->all());
            return response($pre_registration, 200);
        }
    
        //This function will delete a specific pre-registration in the 'pre_registrations' table. 
        public function deletePreRegistration(Request $request, $id) {
            $pre_registration = PreRegistration::find($id);
            if (is_null($pre_registration)) {
                return response()->json(['message' => 'Pre-registration not found'], 404);
            }
            $pre_registration ->delete();
            return response()->json(null, 204);
        }
}
