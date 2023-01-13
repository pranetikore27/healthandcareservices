<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements("Hospital_id");
            $table->string("Hospital_name"); 

            $table->string("Hospital_Land_Mark"); 
            $table->string("Hospital_District"); 
            $table->string("Hospital_City"); 

            $table->string("Hospital_State"); 
            $table->string("Pin_Code"); 
            $table->string("Hospital_Id_Insurance_Information_Bureau"); 

            $table->string("Hospital_Insurance_Incharge_person_user_name")->nullable(); 
            $table->string("Hospital_Insurance_Incharge_person_user_mobilenumber")->nullable();
            $table->string("Hospital_Insurance_Incharge_person_user_email")->nullable();
            // logo
            $table->string("Hospital_Chief_Medical_Officer_name")->nullable();
            $table->longText("Hospital_Chief_Medical_Officer_qualification")->nullable(); 
            $table->date("Hospital_establishment_date")->nullable();

            $table->date("Hospital_registration_date")->nullable(); 
            $table->date("Hospital_registration_date_valid_upto")->nullable(); 
            $table->string("Hospital_registration_authority_name")->nullable();

            $table->string("Hospital_Accreditation_status")->nullable(); 
            $table->string("Hospital_Name_of_Board")->nullable(); 
            $table->string("Hospital_Level_of_Accreditation")->nullable(); 

            $table->date("Hospital_Effective_date_of_accreditation")->nullable(); 
            $table->string("Hospital_Name_of_Board_if_under_process")->nullable(); 
            $table->date("Hospital_Expected_date_of_finalization")->nullable(); 

            $table->string("Accreditation_nature")->nullable(); 
            $table->string("Hospital_owner_name")->nullable(); 
            $table->string("Hospital_owner_designation")->nullable(); 

            $table->string("Hospital_owner_qualification")->nullable(); 
            $table->string("Companies_Organisations_Other_Etc")->nullable(); 
            $table->string("TPAs"); 
          
            $table->string("Private_Insurers"); 
            $table->string("Under_Government_Schemes_or_Bodies"); 
            $table->string("Blacklisted_status"); 

            $table->date("Date_of_blacklisting");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
};
