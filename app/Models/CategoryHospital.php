<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryHospital extends Model
{
    use HasFactory;

    protected $fillable = [
        
        "Hospital_Information_Management_System", 
        "Billing_system", 
        "Patient_Medical_Records", 
        "Coding_Practices", 
        "Record_Keeping", 

        "Hospital_area_in_square_feet", 
        "Area_Allocated_to_IPD", 
        "Area_Allocated_to_OPD", 
        "Number_Of_Beds_per_Category", 
        "Number_Of_Rooms_per_Category", 
        "Number_Of_ICU", 
        "ICU_Photo_Service_Description", 
        "HDU", 
        "HDU_Photo_service_description", 

        "Isolation", 
        "Isolation_Photo_Service_Description", 
        "Critical_Isolation", 
        "Critical_Isolation_photo_service_description", 
        "Wards", 
        "Wards_Photo_Service_Description", 

        "Triple_Sharing", 
        "Triple_Sharing_Service_Description", 
        
        "Twin_Sharing", 
        "Twin_Sharing_Service_Description", 

        "Single", 
        "Single_Photo_Service_Description", 

        "Deluxe_suite", 
        "Deluxe_suite_Service_Description", 


        "Level_of_care_provided", 
        "Number_of_full_time_doctors_employed_in_Hospital", 
        
        //doctor table join karaycha ka itha?
        // bank information details 



        
    ]; 
}
