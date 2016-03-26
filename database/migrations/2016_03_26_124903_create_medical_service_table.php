<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmedicalservice', function (Blueprint $table) {
            $table->increments('intMedicalServiceID');
            $table->string('strMedicalService', 100)->unique();
            $table->string('strDescription');
            $table->float('fltPrice');
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
        Schema::drop('tblmedicalservice');
    }
}
