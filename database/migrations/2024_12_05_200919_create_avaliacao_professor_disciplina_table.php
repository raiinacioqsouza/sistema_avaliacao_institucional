<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoProfessorDisciplinaTable extends Migration
{
    public function up()
    {
        Schema::create('avaliacao_professor_disciplina', function (Blueprint $table) {
            $table->foreignId('id_avaliacao')->constrained('avaliacoes')->onDelete('cascade');
            $table->foreignId('id_disciplina_professor')->constrained('professores_disciplinas')->onDelete('cascade');
            $table->primary(['id_avaliacao', 'id_disciplina_professor']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('avaliacao_professor_disciplina');
    }
}
