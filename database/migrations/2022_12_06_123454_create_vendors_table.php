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
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements("Vendor_id");
            $table->string("Vendor_userid");
            $table->string("Vendor_businessname");

            $table->string("Vendor_businessaddress");
            $table->string("Vendor_mobilenumber");
            $table->string("Vendor_description");

            $table->string("Vendor_category");
            $table->string("Vendor_online_verification_status")->default("0");
            $table->string("Vendor_offline_verification_status")->default("0");

            $table->string("Vendor_website_URL")->nullable();
            $table->string("Vendor_Validfrom")->nullable(); 
            $table->string("Vendor_Validto")->nullable();
            
            $table->timestamp("Vendor_remarks")->nullable(); 
            $table->timestamp("Vendor_isactive")->nullable();
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
        Schema::dropIfExists('vendors');
    }
};
