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
        Schema::create('ambulances', function (Blueprint $table) {
            $table->bigIncrements("Ambulance_id");
                $table->string("Ambulance_name");
                $table->string("Ambulance_mobile_number");
                $table->string("Ambulance_address"); 
                $table->string("Ambulance_city");
                $table->string("Ambulance_pin_Code");
                $table->string("Ambulance_status")->default(1);
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
        Schema::dropIfExists('ambulances');
    }
};
