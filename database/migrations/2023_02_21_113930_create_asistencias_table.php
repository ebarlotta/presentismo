<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->timestamp('entrada');
            $table->timestamp('salida')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('obra_id');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('acciones_id')->nullable();
            $table->boolean('validada')->nullable();
            
            $table->foreign('obra_id')->references('id')->on('obras');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('acciones_id')->references('id')->on('acciones');

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
        Schema::dropIfExists('asistencias');
    }
}
