<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'Student' table columns to fillable property to allow mass assignment.
    protected $fillable = ['id','address', 'contact_no', 'course', 'birthdate', 'birth_place', 'religion', 'student_id', 'created_at', 'updated_at']; 
}
