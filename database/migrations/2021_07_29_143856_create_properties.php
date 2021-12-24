<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('zipCode')->default(0);
            $table->integer('bedroom')->default(0);
            $table->integer('bath')->default(0);
            $table->integer('wifi')->default(0);
            $table->integer('ac')->default(0);
            $table->integer('kitchen')->default(0);
            $table->integer('nightlyRate')->default(0);           
            $table->string('airbnb', 1024)->nullable();
            $table->string('main_image', 1024)->nullable();
            $table->string('next_image', 1024)->nullable();
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
        Schema::dropIfExists('properties');
    }
}
