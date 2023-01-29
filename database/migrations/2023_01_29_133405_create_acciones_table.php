<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('actividad_id');
            $table->unsignedBigInteger('obra_id');
            $table->unsignedBigInteger('empresa_id');
            // $table->unsignedBigInteger('tarea_id')->nullable(); //Arreglar
            $table->unsignedBigInteger('novedad_id');
            $table->string('avance');
            $table->string('fotourl');

            $table->foreign('actividad_id')->references('id')->on('actividads');
            $table->foreign('obra_id')->references('id')->on('obras');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            //$table->foreign('tarea_id')->references('id')->on('actividads');  // Arreglar
            $table->foreign('novedad_id')->references('id')->on('novedads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acciones');
    }
}
