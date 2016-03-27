<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbluserinfo', function (Blueprint $table) {
            $table->increments('intUserInfoID');
            $table->string('strEmail', 100)->unique();
            $table->string('strFirstName', 100);
            $table->string('strLastName', 100);
            $table->string('strAddress');
            $table->string('strContactNumber', 20);
            $table->integer('intUserID')->unsigned();
            
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
        Schema::drop('tbluserinfo');
    }
}

