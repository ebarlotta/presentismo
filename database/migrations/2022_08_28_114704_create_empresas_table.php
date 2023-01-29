<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('movil');
            $table->string('cuit');
            $table->unsignedBigInteger('tipoiva_id')->nullable();
            $table->string('contacto');
            $table->string('ubicacion')->nullable();
            $table->string('localidad_id')->nullable();

            // $table->unsignedBigInteger('rubro_id')->nullable();

            $table->foreign('tipoiva_id')->references('id')->on('tipoivas');
            // $table->foreign('localidad_id')->references('id')->on('localidad'); ARREGLAR
            // $table->foreign('rubro_id')->references('id')->on('rubros');

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
        Schema::dropIfExists('empresas');
    }
}
