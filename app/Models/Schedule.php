<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'schedules' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'sched_room_no', 
        'sched_subject_day',
        'sched_subject_time',
        'instructor_name',
        'term_calendar',
        'student_id',
        'term_id',
        'pre_registered_subject_id',
        'created_at', 
        'updated_at'
    ];
}
