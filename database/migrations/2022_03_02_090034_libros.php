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
        Schema::create('libros', function (Blueprint $table) {

            $table->engine="InnoDB";
            
            $table->bigIncrements('id');
            $table->string('isbn');
            $table->string('nombre_libro');
            $table->longText('descripcion');
            $table->bigInteger('autor_id')->unsigned();
            $table->bigInteger('editorial_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->float('precio');
            $table->integer('cantidad_producto');
            $table->string('ruta');

            $table->timestamps();


            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('autor_id')->references('id')->on('autores')->onDelete("cascade");
            $table->foreign('editorial_id')->references('id')->on('editoriales')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
