<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'notifications' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id',
        'notif_date_time', 
        'notif_type_id', 
        'student_id', 
        'created_at', 
        'updated_at'
    ]; 
}
