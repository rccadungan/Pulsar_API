<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'grades' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'subject_code', 
        'subject_desc', 
        'grade',
        'num_grade',
        'credit_units',
        'average',
        'num_average',
        'student_id',
        'term_id',
        'pre_registered_subject_id',
        'created_at', 
        'updated_at'
    ];
}
