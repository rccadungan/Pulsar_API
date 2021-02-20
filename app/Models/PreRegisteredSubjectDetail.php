<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegisteredSubjectDetail extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'pre_registered_subject_details' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'time', 
        'day', 
        'room_no', 
        'instructor_name', 
        'remarks', 
        'created_at', 
        'updated_at'
    ]; 
}
