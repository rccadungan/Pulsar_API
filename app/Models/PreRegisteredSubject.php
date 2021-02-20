<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegisteredSubject extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'pre_registered_subjects' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'subject_code', 
        'subject_desc', 
        'credit_units', 
        'section', 
        'prd_subject_details_id', 
        'created_at', 
        'updated_at'
    ];
}
