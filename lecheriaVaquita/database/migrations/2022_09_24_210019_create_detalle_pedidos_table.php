<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_detallepedido', function (Blueprint $table) {
            $table->bigIncrements('detallepedido_id');
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')->references('pedido_id')->on('tc_pedido');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('tc_producto');
            $table->string('cantidad');
            $table->string('subtotal');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tt_detallepedido');
    }
}
