<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule; //Use the Schedule Model.


class ScheduleController extends Controller
{
        //This public function will get all the 'schedules' table data. 
        public function getSchedule() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students schedules',
                'data' => Schedule::all()]);
        }
    
        //This public function will get specific 'schedules' table data using the unique ID. 
        public function getScheduleByID($id) {
            $schedule = Schedule::find($id);
            if (is_null($schedule)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Schedule not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student schedule',
                'data' => $schedule::find($id)]);
        }
        
        //This public function will add new schedule to the 'schedules' table.
        public function addSchedule(Request $request) {
            $schedule = Schedule::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student schedule',
                'data' => $schedule]);
        }
    
        //This public function will update a specific schedule to the 'schedules' table using the unique ID.
        public function updateSchedule(Request $request, $id) {
            $schedule = Schedule::find($id);
            if (is_null($schedule)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Schedule not found']);
            }
            $schedule->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student schedule',
                'data' => $schedule]);
        }
    
        //This function will delete a specific schedule in the 'schedules' table. 
        public function deleteSchedule(Request $request, $id) {
            $schedule = Schedule::find($id);
            if (is_null($schedule)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Schedule not found']);
            }
            $schedule ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student schedule',
                'data' => null]);
        }
}
