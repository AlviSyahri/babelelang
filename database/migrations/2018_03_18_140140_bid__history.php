<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BidHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msbid_history',function(Blueprint $table){
            $table->increments('history_id');
            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->datetime('date');
            $table->foreign('product_id')->references('product_id')->on('msproduct');
            $table->foreign('user_id')->references('user_id')->on('msuser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
