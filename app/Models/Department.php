<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'departments' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'dept_name', 
        'created_at', 
        'updated_at'
    ]; 
}
