<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 191);
			$table->text('alamat');
            $table->string('email', 191)->unique();
            $table->string('password', 191);
			$table->string('no_telepon', 191);
			$table->date('dob');
			$table->boolean('jenis_kelamin');
			$table->string('foto', 191);
			$table->boolean('role');
			$table->integer('saldo');
            $table->rememberToken();
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
