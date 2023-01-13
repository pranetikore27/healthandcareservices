<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 0 - received 
     * 1- approved and private 
     * 2 - approved and public  
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements("Review_id");
            $table->string("Review_giveruserid"); 
            $table->string("Review_serviceid"); 
            $table->string("Review_matter"); 
            $table->string("Review_viewmode"); 
            $table->string("Review_status"); 
            
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
        Schema::dropIfExists('reviews');
    }
};
