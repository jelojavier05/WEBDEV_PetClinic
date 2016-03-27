<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbreed', function (Blueprint $table) {
            $table->increments('intBreedID');
            $table->string('strBreedName', 100);
            $table->integer('intAnimalID')->unsigned();
            
            $table->foreign('intAnimalID')->references('intAnimalID')->on('tblanimal')->onDelete('cascade');
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblbreed');
    }
}
