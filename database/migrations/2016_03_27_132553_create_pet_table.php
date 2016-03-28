<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpet', function (Blueprint $table) {
            $table->increments('intPetID');
            $table->string('strPetName', 100);
            $table->string('strDescription', 100);
            $table->integer('intAnimalID')->unsigned();
            $table->integer('intBreedID')->unsigned();
            $table->integer('intUserID')->unsigned();
            
            $table->foreign('intAnimalID')->references('intAnimalID')->on('tblanimal')->onDelete('cascade');
            $table->foreign('intBreedID')->references('intBreedID')->on('tblbreed')->onDelete('cascade');
            $table->foreign('intUserID')->references('intUserID')->on('tbluser')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblpet');
    }
}
