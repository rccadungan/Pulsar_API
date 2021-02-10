<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
       //public $timestamps = false; 
    //Added 'Student' table columns to fillable property to allow mass assignment.
    protected $fillable = ['student_no', 'fname', 'lname', 'email', 'username', 'password', 'created_at', 'updated_at']; 
}
