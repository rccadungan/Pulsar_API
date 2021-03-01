<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clearance; //Use the Clearance Model.

class ClearanceController extends Controller
{
        //This public function will get all the 'clearances' table data. 
        public function getClearance() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students clearances',
                'data' => Clearance::all()]);
        }
    
        //This public function will get specific 'clearances' table data using the unique ID. 
        public function getClearanceByID($id) {
            $clearance = Clearance::find($id);
            if (is_null($clearance)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Clearance not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student clearance',
                'data' => $clearance::find($id)]);
        }
        
        //This public function will add new clearance to the 'clearances' table.
        public function addClearance(Request $request) {
            $clearance = Clearance::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student clearance',
                'data' => $clearance]);
        }
    
        //This public function will update a specific clearance to the 'clearances' table using the unique ID.
        public function updateClearance(Request $request, $id) {
            $clearance = Clearance::find($id);
            if (is_null($clearance)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Clearance not found']);
            }
            $clearance->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student clearance',
                'data' => $clearance]);
        }
    
        //This function will delete a specific clearance in the 'clearances' table. 
        public function deleteClearance(Request $request, $id) {
            $clearance = Clearance::find($id);
            if (is_null($clearance)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Clearance not found']);
            }
            $clearance ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student clearance',
                'data' => null]);
        }
}
