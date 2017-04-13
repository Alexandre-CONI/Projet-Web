<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatUSERTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user1', function(Blueprint $table) {
            $table->increments('ID_User');
            $table->string('Name', 100);
            $table->string('Surname', 100);
            $table->string('Birthday', 100);
            $table->string('Pass', 100);
            $table->string('Email', 100);
            $table->string('Avatar', 100);
            $table->string('Facebook',100);
            $table->integer('ID_Promo')->unsigned();
            $table->integer('ID_Rank')->unsigned();
            $table->integer('ID_Studies')->unsigned();
            $table->foreign('ID_Studies')->references('ID_Studies')->on('studies');
            $table->foreign('ID_Promo')->references('ID_Promo')->on('promo');
            $table->foreign('ID_Rank')->references('ID_Rank')->on('rank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
