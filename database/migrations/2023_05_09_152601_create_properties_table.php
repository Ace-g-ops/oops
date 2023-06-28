<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('address');
            $table->string('prop_type');
            $table->enum('status',['rent', 'sale','lease',])->default('sale');
            $table->string('price');
            $table->string('image');
            $table->string('bed_no');
            $table->string('bath_no');
            $table->integer('prop_size');
            $table->longText('prop_description');
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
