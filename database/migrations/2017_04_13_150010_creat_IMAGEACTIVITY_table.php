<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatIMAGEACTIVITYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageactivity', function(Blueprint $table) {
            $table->increments('ID_Image');
            $table->string('Link_Image', 100);
            $table->string('Surname', 100);
            $table->integer('ID_Activity')->unsigned();
            $table->foreign('ID_Activity')->references('ID_Activity')->on('activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imageactivity');
    }
}
