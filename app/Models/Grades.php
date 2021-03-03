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
        'midterm_grade',
        'midterm_num_grade',
        'finals_grade',
        'finals_num_grade',
        'credit_units',
        'term_grade',
        'num_term_grade',
        'student_id',
        'term_id',
        'created_at', 
        'updated_at'
    ];
}
