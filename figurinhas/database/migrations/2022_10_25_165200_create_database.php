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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('senha');
        });

        Schema::create('figurinhas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('foto');
            $table->dateTime('data_nasc');
            $table->string('cidade');
            $table->unsignedBigInteger('numero');
            $table->string('raridade');
        });

        Schema::create('pacotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->dateTime('data_compra');
            $table->dateTime('data_abertura');
        });

        Schema::create('figurinhas_pacotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('figurinha_id');
            $table->foreign('figurinha_id')->references('id')->on('figurinhas');
            $table->unsignedBigInteger('pacote_id');
            $table->foreign('pacote_id')->references('id')->on('pacotes');     
            $table->boolean('colada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figurinhas_pacotes');
        Schema::dropIfExists('pacotes');
        Schema::dropIfExists('figurinhas');
        Schema::dropIfExists('usuarios');
    }
};
