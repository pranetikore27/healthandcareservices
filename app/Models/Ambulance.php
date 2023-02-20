<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    use HasFactory;
    protected $primaryKey = 'Ambulance_id';
    protected $fillable = [
        "Ambulance_name" ,
        "Ambulance_mobile_number" , 
        "Ambulance_address" , 
        "Ambulance_city" , 
        "Ambulance_pin_Code",
        "Ambulance_status"
    ]; 

}
