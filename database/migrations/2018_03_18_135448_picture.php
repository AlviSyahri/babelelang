p<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Picture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mspicture',function (Blueprint $table){
            $table->increments('picture_id');
            $table->integer('product_id')->unsigned();
            $table->string('picture_name',191);
            $table->foreign('product_id')->references('product_id')->on('msproduct');

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
