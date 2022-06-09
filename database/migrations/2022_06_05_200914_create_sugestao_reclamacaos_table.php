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
        Schema::create('sugestao_reclamacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained('users')->onDelete('cascade');
            $table->foreignId('centro_id')->nullable()->contrained('centros')->onDelete('cascade');
            $table->text('descricao')->default('text');
            $table->char('estado', 10)->default('visto');
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
        Schema::dropIfExists('sugestao_reclamacaos');
    }
};
