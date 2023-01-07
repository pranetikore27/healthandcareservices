<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    //Basic information about hospital, ownership, statutory compliance, registration and accreditation
    //Other empanelments held currently  (specify with names)				
 
    protected $fillable = [
        // "Hospital_id", 
        // "Hospital_photo", 
        "Hospital_name", 
        "Hospital_Land_Mark", 
        "Hospital_District", 
        "Hospital_City", 
        "Hospital_State", 
        "Pin_Code", 
        
        "Hospital_Id_Insurance_Information_Bureau", 
        //it can be any person 
        "Hospital_Insurance_Incharge_person_user_name", 
        "Hospital_Insurance_Incharge_person_user_mobilenumber",
        "Hospital_Insurance_Incharge_person_user_email", 
        "Hospital_Chief_Medical_Officer_name", 
        "Hospital_Chief_Medical_Officer_qualification", 

        "Hospital_establishment_date", 
        "Hospital_registration_date", 
        "Hospital_registration_date_valid_upto", 
        "Hospital_registration_authority_name", 
        "Hospital_Accreditation_status", 
        "Hospital_Name_of_Board", 
        "Hospital_Level_of_Accreditation", 
        "Hospital_Effective_date_of_accreditation", 
        "Hospital_Name_of_Board_if_under_process", 
        "Hospital_Expected_date_of_finalization", 

        "Accreditation_nature", 
        "Hospital_owner_name", 
        "Hospital_owner_designation", 
        "Hospital_owner_qualification", 
        "Companies_Organisations_Other_Etc", 
        "TPAs", 
        "Private_Insurers", 
        "Under_Government_Schemes_or_Bodies", 

        "Blacklisted_status", 
        "Date_of_blacklisting", 
    ]; 
}
