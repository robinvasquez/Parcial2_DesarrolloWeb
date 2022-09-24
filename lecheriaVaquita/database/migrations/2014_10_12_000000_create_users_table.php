<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('empresa');
            $table->string('usuario')->unique();
            $table->string('password');
            $table->tinyinteger('estado')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tc_user');
    }
}
