<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class CreateHospitalInformation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = [
            ["Hospital_name" => "Sahyadri Super Speciality Hospital",
            "Hospital_email_id" => "sahyadri@gmail.com" ,
            "Hospital_address" => "Sr No 163A/1A/26A, Off Solapur Road (Near Bhosale Garden Society,Behind Post Office)" , 
            "Hospital_district" => "Hadapsar" , 
            "Hospital_city" => "Pune" , 
            "Hospital_state"  => "Maharashtra", 
            "Hospital_pin_Code"  => "411028", 
            "Hospital_OPD_contact_no" => "88888 22222" ,
            "Hospital_logo"  => "images",
            "Hospital_ambulance_avalibility"  => 1,
            "Hospital_insurance_avalibility"  => 1, 
            "Hospital_walkin_treatment_avalibility"  => 1,
            "Hospital_category_available"  => "1",  
            "Hospital_features"  => "Critical Care, Oncology, Neurosurgery, Cardiology", 
            "Hospital_start_time"  => "0900",
            "Hospital_end_time" => "0900", 
            "Hospital_website_URl" => "https://sahyadrihospital.com/hadapsar"]
        ]; 

        foreach($hospital as $h)
        {
            Hospital::create($h); 
        }
    }
}
