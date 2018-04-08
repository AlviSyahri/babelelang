<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletedAtmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('msuser',function(Blueprint $table){
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('mspicture',function(Blueprint $table){
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('msproduct',function(Blueprint $table){
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('msproduct_category',function(Blueprint $table){
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('msbid_history',function(Blueprint $table){
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('report_log',function(Blueprint $table){
            $table->timestamp('deleted_at')->nullable();
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
