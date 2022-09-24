<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_pedido', function (Blueprint $table) {
            $table->bigIncrements('pedido_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('tc_user');
            $table->tinyinteger('estado')->default(1);
            $table->datetime('fecha')->useCurrent();
            $table->string('precio');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tc_pedido');
    }
}
