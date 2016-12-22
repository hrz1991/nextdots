<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProperiesFacilitiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_property', function (Blueprint $table) {

            $table->integer('property_id');
            $table->integer('facilities_id');

            //$table->foreign('property_id')->references('id')->on('property');
            //$table->foreign('facilities_id')->references('id')->on('facilities');

            $table->primary(['property_id', 'facilities_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facilities_property');
    }
}
