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
        Schema::create('ventas', function (Blueprint $table){
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id');
            $table->float('total');
            $table->bigInteger('estado')->nullable();
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('users');

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

        Schema::dropIfExists('ventas');
    }
};
