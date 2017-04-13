<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatLIKEIMAGETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeimage', function(Blueprint $table) {
            $table->integer('ID_User')->unsigned();
            $table->integer('ID_Image')->unsigned();
            $table->foreign('ID_User')->references('ID_User')->on('user1');
            $table->foreign('ID_Image')->references('ID_Image')->on('imageactivity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('likeimage');
    }
}
