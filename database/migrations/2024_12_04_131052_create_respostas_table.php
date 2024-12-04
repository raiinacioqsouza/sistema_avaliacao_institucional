<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id('id_resposta'); // ID único para a resposta
            $table->unsignedBigInteger('id_usuario'); // FK para a tabela usuários
            $table->unsignedBigInteger('id_pergunta'); // FK para a tabela perguntas
            $table->string('resposta', 255); // Resposta do usuário
            $table->timestamps(); // Campos created_at e updated_at

            // Chave estrangeira para usuários
            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('usuarios')
                ->onDelete('cascade');

            // Chave estrangeira para perguntas
            $table->foreign('id_pergunta')
                ->references('id_pergunta')
                ->on('perguntas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
};