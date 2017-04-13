<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSHOPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function(Blueprint $table) {
            $table->increments('ID_Shop');
            $table->string('Item', 100);
            $table->string('Item_Image', 100);
            $table->string('Item_Description', 250);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SHOP');
    }
}
