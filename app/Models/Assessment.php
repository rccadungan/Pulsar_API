<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'assessments' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'scholarship_code', 
        'assessment_term',
        'assessment_course',
        'payment_method',
        'payment_desc',
        'total_amount',
        'credit_units',
        'student_id',
        'one_time_password_id',
        'schedule_id',
        'term_id',
        'created_at', 
        'updated_at'
    ];
}
