<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCOMMENTARYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentary', function(Blueprint $table) {
            $table->increments('ID_Commentary');
            $table->string('Commentary', 250);
            $table->integer('ID_Activity')->unsigned();
            $table->integer('ID_User')->unsigned();
            $table->foreign('ID_Activity')->references('ID_Activity')->on('activity');
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
        Schema::drop('commentary');
    }
}
