<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifType extends Model
{
    use HasFactory;
    //public $timestamps = false; 
    //Added 'notif_types' table columns to fillable property to allow mass assignment.
    protected $fillable = [
        'id',
        'notif_type_desc', 
        'created_at', 
        'updated_at'
    ]; 
}
