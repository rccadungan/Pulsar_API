<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotifType; //Use the NotifType Model.

class NotifTypeController extends Controller
{
        //This public function will get all the 'notif_types' table data. 
        public function getNotifType() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved notifications types',
                'data' => NotifType::all()]);
        }
    
        //This public function will get specific 'notif_types' table data using the unique ID. 
        public function getNotifTypeById($id) {
            $notif_type = NotifType::find($id);
            if (is_null($notif_type)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Notification Type not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved notification type',
                'data' => $notif_type::find($id)]);
        }
        
        //This public function will add new notification type to the 'notif_types' table.
        public function addNotifType(Request $request) {
            $notif_type = NotifType::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added notification type',
                'data' => $notif_type]);
        }
    
        //This public function will update a specific notification type to the 'notif_types' table using the unique ID.
        public function updateNotifType(Request $request, $id) {
            $notif_type = NotifType::find($id);
            if (is_null($notif_type)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Notification Type not found']);
            }
            $notif_type->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated notification type',
                'data' => $notif_type]);
        }
    
        //This function will delete a specific notification type in the 'notif_types' table. 
        public function deleteNotifType(Request $request, $id) {
            $notif_type= NotifType::find($id);
            if (is_null($notif_type)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Notification Type not found']);
            }
            $notif_type->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted notification type',
                'data' => null]);
        }
}
