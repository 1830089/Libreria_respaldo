<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detalles', function(Blueprint $table){
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('libro_id');
            $table->float('precio');
            $table->integer('cantidad_producto');
            $table->bigInteger('estado')->nullable();
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('ventas');
            $table->foreign('libro_id')->references('id')->on('libros');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::dropIfExists('detalles');

    }
};
