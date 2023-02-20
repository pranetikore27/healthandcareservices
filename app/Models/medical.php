<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical extends Model
{
    use HasFactory;
    protected $primaryKey = 'Medical_id';
    protected $fillable = [
        "Medical_name" ,
        "Medical_email_id" ,
        "Medical_mobile_number",
        "Medical_address" , 
        "Medical_city" , 
        "Medical_pin_Code" , 
        "Medical_features" , 
        "Medical_start_time",
        "Medical_end_time",
        "Medical_website_URl",
        "Medical_status"
    ];
}
