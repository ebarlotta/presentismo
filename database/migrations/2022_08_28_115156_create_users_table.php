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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->unsignedBigInteger('tipouser_id')->nullable();  // Roles
            $table->unsignedBigInteger('empresa_id')->nullable();

            $table->string('documento')->nullable();

            $table->string('telefono')->nullable();
            $table->string('nroemergencia')->nullable();

            $table->unsignedBigInteger('obrasocial_id')->nullable();
            $table->string('prepaga')->nullable();

            $table->foreign('tipouser_id')->references('id')->on('tiposusers');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('obrasocial_id')->references('id')->on('obrasocials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
