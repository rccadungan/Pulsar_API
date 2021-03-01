<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OneTimePassword; //Use the OneTimePassword Model.

class OneTimePasswordController extends Controller
{
        //This public function will get all the 'one_time_passwords' table data. 
        public function getOneTimePassword() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved one time passwords',
                'data' => OneTimePassword::all()]);
        }
    
        //This public function will get specific 'one_time_passwords' table data using the unique ID. 
        public function getOneTimePasswordByID($id) {
            $one_time_password = OneTimePassword::find($id);
            if (is_null($one_time_password)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'One Time Password not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved one time password',
                'data' => $one_time_password::find($id)]);
        }
        
        //This public function will add new one time password to the 'one_time_passwords' table.
        public function addOneTimePassword(Request $request) {
            $one_time_password = OneTimePassword::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added one time password',
                'data' => $one_time_password]);
        }
    
        //This public function will update a specific one time password to the 'one_time_passwords' table using the unique ID.
        public function updateOneTimePassword(Request $request, $id) {
            $one_time_password = OneTimePassword::find($id);
            if (is_null($one_time_password)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'One Time Password not found']);
            }
            $one_time_password->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated one time password',
                'data' => $one_time_password]);
        }
    
        //This function will delete a specific one time password in the 'one_time_passwords' table. 
        public function deleteOneTimePassword(Request $request, $id) {
            $one_time_password = OneTimePassword::find($id);
            if (is_null($one_time_password)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'One Time Password not found']);
            }
            $one_time_password ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted one time password',
                'data' => null]);
        }
}
