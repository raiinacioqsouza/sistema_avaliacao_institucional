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
            $table->unsignedBigInteger('id_usuario');  // Adiciona a coluna id_usuario
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->string('especialidade', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professores');
    }
}
