<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule; //Use the Schedule Model.


class ScheduleController extends Controller
{
        //This public function will get all the 'schedules' table data. 
        public function getSchedule() {
            return response()->json(Schedule::all(), 200);
        }
    
        //This public function will get specific 'schedules' table data using the unique ID. 
        public function getScheduleByID($id) {
            $schedule = Schedule::find($id);
            if (is_null($schedule)) {
                return response()->json(['message' => 'Schedule not found'], 404);
            }
            return response()->json($schedule::find($id), 200);
        }
        
        //This public function will add new schedule to the 'schedules' table.
        public function addSchedule(Request $request) {
            $schedule = Schedule::create($request->all());
            return response()->json($schedule, 201);
        }
    
        //This public function will update a specific schedule to the 'schedules' table using the unique ID.
        public function updateSchedule(Request $request, $id) {
            $schedule = Schedule::find($id);
            if (is_null($schedule)) {
                return response()->json(['message' => 'Schedule not found'], 404);
            }
            $schedule->update($request->all());
            return response($schedule, 200);
        }
    
        //This function will delete a specific schedule in the 'schedules' table. 
        public function deleteSchedule(Request $request, $id) {
            $schedule = Schedule::find($id);
            if (is_null($schedule)) {
                return response()->json(['message' => 'Schedule not found'], 404);
            }
            $schedule ->delete();
            return response()->json(null, 204);
        }
}
