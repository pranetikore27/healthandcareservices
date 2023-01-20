<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    //Basic information about hospital, ownership, statutory compliance, registration and accreditation
    //Other empanelments held currently  (specify with names)				
    protected $primaryKey = 'Hospital_id';
    protected $fillable = [
        "Hospital_name" ,
        "Hospital_email_id" ,
        "Hospital_address" , 
        "Hospital_district" , 
        "Hospital_city" , 
        "Hospital_state" , 
        "Hospital_pin_Code" , 
        "Hospital_OPD_contact_no" ,
        "Hospital_logo" ,
        "Hospital_ambulance_avalibility",
        "Hospital_insurance_avalibility", 
        "Hospital_walkin_tretment_avalibility",
        "Hospital_category_available" ,  
        "Hospital_features" , 
        "Hospital_start_time",
        "Hospital_end_time",
        "Hospital_website_URl"
    ]; 
}
