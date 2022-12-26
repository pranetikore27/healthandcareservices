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
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements("Location_id");

            $table->string("Location_owneruserid");
            $table->string("Location_ip")->unique();

            $table->string("Location_countryName");
            $table->string("Location_countryCode");
            $table->string("Location_regionCode");
            $table->string("Location_regionName");

            $table->string("Location_cityName");
            $table->string("Location_zipCode");
            $table->string("Location_isoCode")->nullable();
            $table->string("Location_postalCode")->nullable();

            $table->string("Location_latitude")->nullable();
            $table->string("Location_longitude")->nullable();
            $table->string("Location_metroCode")->nullable();
            $table->string("Location_areaCode")->nullable();
            $table->string("Location_timezone")->nullable();

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
        Schema::dropIfExists('locations');
    }
};
