<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clearance; //Use the Clearance Model.

class ClearanceController extends Controller
{
        //This public function will get all the 'clearances' table data. 
        public function getClearance() {
            return response()->json(Clearance::all(), 200);
        }
    
        //This public function will get specific 'clearances' table data using the unique ID. 
        public function getClearanceByID($id) {
            $clearance = Clearance::find($id);
            if (is_null($clearance)) {
                return response()->json(['message' => 'Clearance not found'], 404);
            }
            return response()->json($clearance::find($id), 200);
        }
        
        //This public function will add new clearance to the 'clearances' table.
        public function addClearance(Request $request) {
            $clearance = Clearance::create($request->all());
            return response()->json($clearance, 201);
        }
    
        //This public function will update a specific clearance to the 'clearances' table using the unique ID.
        public function updateClearance(Request $request, $id) {
            $clearance = Clearance::find($id);
            if (is_null($clearance)) {
                return response()->json(['message' => 'Clearance not found'], 404);
            }
            $clearance->update($request->all());
            return response($clearance, 200);
        }
    
        //This function will delete a specific clearance in the 'clearances' table. 
        public function deleteClearance(Request $request, $id) {
            $clearance = Clearance::find($id);
            if (is_null($clearance)) {
                return response()->json(['message' => 'Clearance not found'], 404);
            }
            $clearance ->delete();
            return response()->json(null, 204);
        }
}
