<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_log',function (Blueprint $table){
            $table->increments('report_id');
            $table->integer('user_id')->unsigned();
            $table->integer('user_id_reported')->unsigned();
            $table->text('report_note');
            $table->string('report_image', 191);
            $table->integer('report_type');
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
