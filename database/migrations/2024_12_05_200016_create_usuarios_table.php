<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nome', 100);
            $table->string('email_institucional', 100)->unique();
            $table->string('matricula', 20)->unique();
            $table->string('senha');
            $table->enum('tipo_usuario', ['aluno', 'tecnico-administrativo']);
            $table->unsignedBigInteger('id_curso')->nullable(); // Aqui a coluna de chave estrangeira
            $table->string('turma', 50)->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('set null');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
