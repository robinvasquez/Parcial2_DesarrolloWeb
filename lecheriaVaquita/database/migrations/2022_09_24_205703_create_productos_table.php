<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_producto', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->unsignedBigInteger('tipoproducto_id');
            $table->foreign('tipoproducto_id')->references('tipoproducto_id')->on('tc_tipoproducto');
            $table->string('nombreProducto');
            $table->string('precio');
            $table->tinyinteger('estado')->default(1);
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tc_producto');
    }
}
