<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblschedule', function (Blueprint $table) {
            $table->increments('intScheduleID');
            $table->string('strDay', 100)->unique();
            $table->integer('intFrom');
            $table->integer('intTo');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('tblschedule');
    }
}
