<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroomServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblgroomservice', function (Blueprint $table) {
            $table->increments('intGroomServiceID');
            $table->string('strGroomService', 100)->unique();
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
        Schema::drop('tblgroomservice');
    }
}
