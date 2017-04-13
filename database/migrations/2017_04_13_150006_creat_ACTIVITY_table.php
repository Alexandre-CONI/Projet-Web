<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatACTIVITYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function(Blueprint $table) {
            $table->increments('ID_Activity');
            $table->string('Activity_Name', 100);
            $table->string('Activity_Photo', 100);
            $table->string('Description', 250);
            $table->string('Activity_Target', 100);
            $table->string('Activity_Date', 100);
            $table->string('Activity_Price', 100);
            $table->integer('ID_User')->unsigned();
            $table->foreign('ID_User')->references('ID_User')->on('user1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity');
    }
}
