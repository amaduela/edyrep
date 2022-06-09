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
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nome_abreviado')->nullable();
            $table->string('endereco');
            $table->double('valor_acesso');
            $table->string('detalhe')->nullable();
            $table->string('imagem')->nullable();
            $table->timestamps();

            $table->unique('nome')->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros');
    }
};
