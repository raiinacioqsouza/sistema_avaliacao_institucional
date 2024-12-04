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
        Schema::create('professores_disciplinas', function (Blueprint $table) {
            $table->id('id_professor_disciplina'); // ID primário
            $table->unsignedBigInteger('id_professor'); // FK para a tabela professores
            $table->unsignedBigInteger('id_disciplina'); // FK para a tabela disciplinas
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professores_disciplinas');
    }
};
