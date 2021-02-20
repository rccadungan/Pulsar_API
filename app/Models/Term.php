<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'terms' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'term_name', 
        'term_no', 
        'school_year_from', 
        'school_year_to', 
        'created_at', 
        'updated_at'
    ];
}
