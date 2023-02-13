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
            $table->string("Hospital_address"); 
            $table->string("Hospital_city"); 
            $table->string("Hospital_pin_Code"); 
            $table->text("Hospital_features")->nullable();
            $table->string("Hospital_start_time")->nullable();
            $table->string("Hospital_end_time")->nullable();
            $table->string("Hospital_website_URl")->nullable();
            $table->string("Hospital_status")->default(1); 
            
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
