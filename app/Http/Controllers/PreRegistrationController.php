<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegistration; //Use the PreRegistration Model.


class PreRegistrationController extends Controller
{
        //This public function will get all the 'pre_registrations' table data. 
        public function getPreRegistration() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students pre-registrations',
                'data' => PreRegistration::all()]);
        }
    
        //This public function will get specific 'pre_registrations' table data using the unique ID. 
        public function getPreRegistrationByID($id) {
            $pre_registration = PreRegistration::find($id);
            if (is_null($pre_registration)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registration not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student pre-registration',
                'data' => $pre_registration::find($id)]);
        }
        
        //This public function will add new pre-registration to the 'pre_registrations' table.
        public function addPreRegistration(Request $request) {
            $pre_registration = PreRegistration::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student pre-registration',
                'data' => $pre_registration]);
        }
    
        //This public function will update a specific pre-registration to the 'pre_registrations' table using the unique ID.
        public function updatePreRegistration(Request $request, $id) {
            $pre_registration = PreRegistration::find($id);
            if (is_null($pre_registration)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registration not found']);
            }
            $pre_registration->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student pre-registration',
                'data' => $pre_registration]);
        }
    
        //This function will delete a specific pre-registration in the 'pre_registrations' table. 
        public function deletePreRegistration(Request $request, $id) {
            $pre_registration = PreRegistration::find($id);
            if (is_null($pre_registration)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Pre-registration not found']);
            }
            $pre_registration ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student pre-registration',
                'data' => null]);
        }
}
