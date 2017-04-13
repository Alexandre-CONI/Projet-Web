<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatLIKEACTIVITYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeactivity', function(Blueprint $table) {
            $table->integer('ID_User')->unsigned();
            $table->integer('ID_Activity')->unsigned();
            $table->foreign('ID_User')->references('ID_User')->on('user1');
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
        Schema::drop('likeactivity');
    }
}
