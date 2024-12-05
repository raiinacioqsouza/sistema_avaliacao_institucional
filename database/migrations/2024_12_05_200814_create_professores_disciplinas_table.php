<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresDisciplinasTable extends Migration
{
    public function up()
    {
        Schema::create('professores_disciplinas', function (Blueprint $table) {
            $table->id('id_disciplina_professor');
            $table->foreignId('id_disciplina')->constrained('disciplinas')->onDelete('cascade');
            $table->foreignId('id_professor')->constrained('professores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professores_disciplinas');
    }
}
