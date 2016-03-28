<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappointment', function (Blueprint $table) {
            $table->increments('intAppointmentID');
            $table->date('dateAppointment');
            $table->integer('intTime');
            $table->integer('intUserID')->unsigned();
            $table->integer('intPetID')->unsigned();
            $table->integer('intStatus')->default(1);
            
            $table->foreign('intUserID')->references('intUserID')->on('tbluser')->onDelete('cascade');
            $table->foreign('intPetID')->references('intPetID')->on('tblpet')->onDelete('cascade');
        });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblappointment');
    }
}
