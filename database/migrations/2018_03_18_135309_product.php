<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msproduct',function (Blueprint $table){
            $table->increments('product_id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('product_name',191);
            $table->text('product_description');
            $table->integer('start_price');
            $table->tinyInteger('product_condition');
            $table->integer('weight');
            $table->integer('multiple_price');
            $table->timestamp('expired_bid');
            $table->integer('max_price');
            $table->foreign('user_id')->references('user_id')->on('msuser');
            $table->foreign('category_id')->references('category_id')->on('msproduct_category');

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
