<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneTimePassword extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'one_time_passwords' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id', 
        'one_time_password_code', 
        'created_at', 
        'updated_at'
    ];
}
