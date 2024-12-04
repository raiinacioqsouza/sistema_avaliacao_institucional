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
        Schema::create('avaliacao_professor_disciplina', function (Blueprint $table) {
            $table->id('id_avaliacao'); // ID único para a avaliação
            $table->unsignedBigInteger('id_professor'); // FK para a tabela professores
            $table->unsignedBigInteger('id_disciplina'); // FK para a tabela disciplinas
            $table->unsignedBigInteger('id_usuario'); // FK para o usuário que fez a avaliação
            $table->integer('nota'); // Nota da avaliação (ex.: de 1 a 5)
            $table->text('comentario')->nullable(); // Comentário opcional
            $table->timestamps(); // Campos created_at e updated_at

            // Chave estrangeira para professores
            $table->foreign('id_professor')
                ->references('id_professor')
                ->on('professores')
                ->onDelete('cascade');

            // Chave estrangeira para disciplinas
            $table->foreign('id_disciplina')
                ->references('id_disciplina')
                ->on('disciplinas')
                ->onDelete('cascade');

            // Chave estrangeira para usuários
            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('usuarios')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao_professor_disciplina');
    }
};
