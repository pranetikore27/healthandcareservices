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
            $table->string("Vendor_userid")->nullable();
            $table->string("Vendor_mobilenumber")->nullable();

            $table->string("Vendor_Category_Id")->nullable();
            $table->string("Vendor_Category_Fields")->nullable();
            $table->string("Vendor_online_verification_status")->default("0");
            $table->string("Vendor_offline_verification_status")->default("0");

            $table->string("Vendor_remarks")->nullable();
            $table->string("Vendor_Validfrom")->nullable(); 
            $table->string("Vendor_isactive")->default("0");

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
