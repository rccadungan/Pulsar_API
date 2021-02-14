<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotifType; //Use the NotifType Model.

class NotifTypeController extends Controller
{
        //This public function will get all the 'notif_types' table data. 
        public function getNotifType() {
            return response()->json(NotifType::all(), 200);
        }
    
        //This public function will get specific 'notif_types' table data using the unique ID. 
        public function getNotifTypeById($id) {
            $notif_type = NotifType::find($id);
            if (is_null($notif_type)) {
                return response()->json(['message' => 'Notification Type not found'], 404);
            }
            return response()->json($notif_type::find($id), 200);
        }
        
        //This public function will add new notification type to the 'notif_types' table.
        public function addNotifType(Request $request) {
            $notif_type = NotifType::create($request->all());
            return response()->json($notif_type, 201);
        }
    
        //This public function will update a specific notification type to the 'notif_types' table using the unique ID.
        public function updateNotifType(Request $request, $id) {
            $notif_type = NotifType::find($id);
            if (is_null($notif_type)) {
                return response()->json(['message' => 'Notification Type not found'], 404);
            }
            $notif_type->update($request->all());
            return response($notif_type, 200);
        }
    
        //This function will delete a specific notification type in the 'notif_types' table. 
        public function deleteNotifType(Request $request, $id) {
            $notif_type= NotifType::find($id);
            if (is_null($notif_type)) {
                return response()->json(['message' => 'Notification Type not found'], 404);
            }
            $notif_type->delete();
            return response()->json(null, 204);
        }
}
