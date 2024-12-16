<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration
{
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id('id_professor');
            $table->unsignedBigInteger('id_usuario'); // Relacionamento com usuários
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->string('titulacao', 100)->nullable(); // Coluna para titulação
            $table->string('area_especializacao', 150)->nullable(); // Coluna para área de especialização
            $table->string('especialidade', 100)->nullable(); // Caso seja necessário manter
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professores');
    }
}
