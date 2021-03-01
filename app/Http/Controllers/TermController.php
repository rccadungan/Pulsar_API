<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term; //Use the Term Model.

class TermController extends Controller
{
        //This public function will get all the 'terms' table data. 
        public function getTerm() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved terms',
                'data' => Term::all()]);
        }
    
        //This public function will get specific 'terms' table data using the unique ID. 
        public function getTermByID($id) {
            $term = Term::find($id);
            if (is_null($term)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Term not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved term',
                'data' => $term::find($id)]);
        }
        
        //This public function will add new term to the 'terms' table.
        public function addTerm(Request $request) {
            $term = Term::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added term',
                'data' => $term]);
        }
    
        //This public function will update a specific term to the 'terms' table using the unique ID.
        public function updateTerm(Request $request, $id) {
            $term = Term::find($id);
            if (is_null($term)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Term not found']);
            }
            $term->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated term',
                'data' => $term]);
        }
    
        //This function will delete a specific term in the 'terms' table. 
        public function deleteTerm(Request $request, $id) {
            $term = Term::find($id);
            if (is_null($term)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Term not found']);
            }
            $term ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted term',
                'data' => null]);
        }
}
