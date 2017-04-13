<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSHOPPINGCARTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingcart', function(Blueprint $table) {
            $table->increments('ID_Shopping_Cart');
            $table->string('Amount', 100);
            $table->integer('ID_User')->unsigned();
            $table->integer('ID_Shop')->unsigned();
            $table->foreign('ID_User')->references('ID_User')->on('user1');
            $table->foreign('ID_Shop')->references('ID_Shop')->on('shop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shoppingcart');
    }
}
