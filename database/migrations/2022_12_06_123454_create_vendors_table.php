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
            
            $table->string("Vendor_category");
            
            $table->string("Vendor_isverified")->default("0");
            $table->string("Vendor_isactive")->default("0");
            $table->string("Vendor_referencenumber")->nullable(); 
            $table->string("Vendor_Accountnumber")->nullable();
            $table->timestamp("Vendor_Validfrom")->nullable(); 
            $table->timestamp("Vendor_Validto")->nullable();
            $table->string("Vendor_remarks")->nullable();
            $table->string("Vendor_bio")->nullable();
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
