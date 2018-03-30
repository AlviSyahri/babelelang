<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlagDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('msuser',function(Blueprint $table){
            $table->tinyInteger('flag_delete');
        });
        Schema::table('mspicture',function(Blueprint $table){
            $table->tinyInteger('flag_delete');
        });
        Schema::table('msproduct',function(Blueprint $table){
            $table->tinyInteger('flag_delete');
        });
        Schema::table('msproduct_category',function(Blueprint $table){
            $table->tinyInteger('flag_delete');
        });
        Schema::table('msbid_history',function(Blueprint $table){
            $table->tinyInteger('flag_delete');
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
