<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification; //Use the Notification Model.

class NotificationController extends Controller
{
        //This public function will get all the 'notifications' table data. 
        public function getNotification() {
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved students notifications',
                'data' => Notification::all()]);
        }
    
        //This public function will get specific 'notifications' table data using the unique ID. 
        public function getNotificationByID($id) {
            $notification = Notification::find($id);
            if (is_null($notification)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Notification not found']);
            }
            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully retrieved student notification',
                'data' => $notification::find($id)]);
        }
        
        //This public function will add new notification to the 'notifications' table.
        public function addNotification(Request $request) {
            $notification = Notification::create($request->all());
            return response()->json([
                'success' => true,
                'statusCode' => 201,
                'message' => 'Successfully added student notification',
                'data' => $notification]);
        }
    
        //This public function will update a specific notification to the 'notifications' table using the unique ID.
        public function updateNotification(Request $request, $id) {
            $notification = Notification::find($id);
            if (is_null($notification)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Notification not found']);
            }
            $notification->update($request->all());
            return response([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Successfully updated student notification',
                'data' =>$notification]);
        }
    
        //This function will delete a specific notification in the 'notifications' table. 
        public function deleteNotification(Request $request, $id) {
            $notification = Notification::find($id);
            if (is_null($notification)) {
                return response()->json([
                    'success' => false,
                    'statusCode' => 404,
                    'message' => 'Notification not found']);
            }
            $notification ->delete();
            return response()->json([
                'success' => true,
                'statusCode' => 204,
                'message' => 'Successfully deleted student notification',
                'data' => null]);
        }
}
