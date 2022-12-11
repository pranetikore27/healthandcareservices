<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    /*
    Notification_viewmode 
    0 - private 

    1 - public [including guest users]

    2 - only for logged in users 

    Notification_status 
    0 - private 
    1 - public  
    */

    protected $fillable = [
        "Notification_Senderid", 
        "Notification_matter", 
        "Notification_viewmode", 
        "Notification_validityinhours", 
        "Notification_status"
    ];
    
}
