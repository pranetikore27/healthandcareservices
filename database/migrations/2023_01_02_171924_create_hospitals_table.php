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
            $table->string("Hospital_email_id");
            $table->string("Hospital_land_Mark"); 
            $table->string("Hospital_district"); 
            $table->string("Hospital_city"); 
            $table->string("Hospital_state"); 
            $table->string("Hospital_pin_Code"); 
            $table->string("Hospital_OPD_contact_no");
            $table->string("Hospital_logo");
            $table->integer("Hospital_ambulance_avalibility")->default(0);
            $table->integer("Hospital_insurance_avalibility")->default(0); 
            $table->integer("Hospital_walkin_tretment_avalibility")->default(0);
            $table->text("Hospital_category_available");  
            $table->text("Hospital_features");
            $table->string("Hospital_start_time");
            $table->string("Hospital_end_time");
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
