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
        Schema::create('medicals', function (Blueprint $table) {
                $table->bigIncrements("Medical_id");
                $table->string("Medical_name");
                $table->string("Medical_email_id")->nullable();
                $table->string("Medical_mobile_number");
                $table->string("Medical_address"); 
                $table->string("Medical_city");
                $table->string("Medical_pin_Code"); 
                $table->string("Medical_start_time")->nullable();
                $table->string("Medical_end_time")->nullable();
                $table->string("Medical_website_URl")->nullable();
                $table->string("Medical_status")->default(1);
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
        Schema::dropIfExists('medicals');
    }
};
