<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term; //Use the Term Model.

class TermController extends Controller
{
        //This public function will get all the 'terms' table data. 
        public function getTerm() {
            return response()->json(Term::all(), 200);
        }
    
        //This public function will get specific 'terms' table data using the unique ID. 
        public function getTermByID($id) {
            $term = Term::find($id);
            if (is_null($term)) {
                return response()->json(['message' => 'Term not found'], 404);
            }
            return response()->json($term::find($id), 200);
        }
        
        //This public function will add new term to the 'terms' table.
        public function addTerm(Request $request) {
            $term = Term::create($request->all());
            return response()->json($term, 201);
        }
    
        //This public function will update a specific term to the 'terms' table using the unique ID.
        public function updateTerm(Request $request, $id) {
            $term = Term::find($id);
            if (is_null($term)) {
                return response()->json(['message' => 'Term not found'], 404);
            }
            $term->update($request->all());
            return response($term, 200);
        }
    
        //This function will delete a specific term in the 'terms' table. 
        public function deleteTerm(Request $request, $id) {
            $term = Term::find($id);
            if (is_null($term)) {
                return response()->json(['message' => 'Term not found'], 404);
            }
            $term ->delete();
            return response()->json(null, 204);
        }
}
