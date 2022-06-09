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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo');
            $table->text('descricao')->nullable()->default('text');
            $table->foreignId('centro_id')
                  ->constrained('centros')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->double('preco')->nullable()->default(00.00);
            $table->bigInteger('telefone')->unsigned();
            $table->bigInteger('telefone_alt')->nullable();
            $table->string('imagem');
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
        Schema::dropIfExists('servicos');
    }
};
