<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'clearances' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'violation_desc', 
        'violation_date', 
        'status', 
        'student_id', 
        'department_id', 
        'created_at', 
        'updated_at']; 
}
