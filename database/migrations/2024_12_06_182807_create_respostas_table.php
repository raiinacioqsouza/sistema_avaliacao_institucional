<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasTable extends Migration
{
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id('id_resposta');
            // Alterar a chave estrangeira para apontar para 'id_usuario' na tabela 'usuarios'
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            
            $table->foreignId('id_pergunta')->constrained('perguntas')->onDelete('cascade');
            $table->text('resposta');
            $table->timestamp('data_resposta')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
{
    Schema::disableForeignKeyConstraints();
    Schema::dropIfExists('respostas');
    Schema::enableForeignKeyConstraints();
}

} 