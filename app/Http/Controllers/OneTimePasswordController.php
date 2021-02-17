<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OneTimePassword; //Use the OneTimePassword Model.

class OneTimePasswordController extends Controller
{
        //This public function will get all the 'one_time_passwords' table data. 
        public function getOneTimePassword() {
            return response()->json(OneTimePassword::all(), 200);
        }
    
        //This public function will get specific 'one_time_passwords' table data using the unique ID. 
        public function getOneTimePasswordByID($id) {
            $one_time_password = OneTimePassword::find($id);
            if (is_null($one_time_password)) {
                return response()->json(['message' => 'One Time Password not found'], 404);
            }
            return response()->json($one_time_password::find($id), 200);
        }
        
        //This public function will add new one time password to the 'one_time_passwords' table.
        public function addOneTimePassword(Request $request) {
            $one_time_password = OneTimePassword::create($request->all());
            return response()->json($one_time_password, 201);
        }
    
        //This public function will update a specific one time password to the 'one_time_passwords' table using the unique ID.
        public function updateOneTimePassword(Request $request, $id) {
            $one_time_password = OneTimePassword::find($id);
            if (is_null($one_time_password)) {
                return response()->json(['message' => 'One Time Password not found'], 404);
            }
            $one_time_password->update($request->all());
            return response($one_time_password, 200);
        }
    
        //This function will delete a specific one time password in the 'one_time_passwords' table. 
        public function deleteOneTimePassword(Request $request, $id) {
            $one_time_password = OneTimePassword::find($id);
            if (is_null($one_time_password)) {
                return response()->json(['message' => 'One Time Password not found'], 404);
            }
            $one_time_password ->delete();
            return response()->json(null, 204);
        }
}
