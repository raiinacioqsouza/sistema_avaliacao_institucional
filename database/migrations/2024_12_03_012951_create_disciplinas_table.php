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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id('id_disciplina'); // ID primário
            $table->string('nome', 100); // Nome da disciplina
            $table->text('descricao')->nullable(); // Descrição opcional
           // $table->unsignedBigInteger('id_curso'); // Chave estrangeira para cursos
            $table->timestamps(); // Campos created_at e updated_at

            // Configurar a chave estrangeira
           // $table->foreign('id_curso')
              //  ->references('id_curso')
              //  ->on('cursos')
              //  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};
