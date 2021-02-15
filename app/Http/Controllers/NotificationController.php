<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification; //Use the Notification Model.

class NotificationController extends Controller
{
        //This public function will get all the 'notifications' table data. 
        public function getNotification() {
            return response()->json(Notification::all(), 200);
        }
    
        //This public function will get specific 'notifications' table data using the unique ID. 
        public function getNotificationByID($id) {
            $notification = Notification::find($id);
            if (is_null($notification)) {
                return response()->json(['message' => 'Notification not found'], 404);
            }
            return response()->json($notification::find($id), 200);
        }
        
        //This public function will add new notification to the 'notifications' table.
        public function addNotification(Request $request) {
            $notification = Notification::create($request->all());
            return response()->json($notification, 201);
        }
    
        //This public function will update a specific notification to the 'notifications' table using the unique ID.
        public function updateNotification(Request $request, $id) {
            $notification = Notification::find($id);
            if (is_null($notification)) {
                return response()->json(['message' => 'Notification not found'], 404);
            }
            $notification->update($request->all());
            return response($notification, 200);
        }
    
        //This function will delete a specific notification in the 'notifications' table. 
        public function deleteNotification(Request $request, $id) {
            $notification = Notification::find($id);
            if (is_null($notification)) {
                return response()->json(['message' => 'Notification not found'], 404);
            }
            $notification ->delete();
            return response()->json(null, 204);
        }
}
