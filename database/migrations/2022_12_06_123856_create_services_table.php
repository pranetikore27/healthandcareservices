<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Service_isactive
     * 0 - active
     * 1 - pending approval
     * 2- inactive
     * 3 - expired
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements("Service_id");
            $table->string("Service_providerid"); 
            $table->string("Service_name");
            $table->string("Service_description");
            $table->string("Service_charge");
            $table->string("Service_validity");
            $table->string("Service_isactive");           
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
        Schema::dropIfExists('services');
    }
};
