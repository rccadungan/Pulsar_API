<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegistration extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'pre_registrations' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'student_id', 
        'term_id', 
        'pre_registered_subject_id', 
        'created_at', 
        'updated_at'
    ];
}
