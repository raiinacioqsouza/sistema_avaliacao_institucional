<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasTable extends Migration
{
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_resposta');
            $table->unsignedBigInteger('id_usuario'); // Define explicitamente como unsignedBigInteger
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            
            // Definindo explicitamente a coluna e a chave estrangeira
            $table->unsignedBigInteger('id_pergunta'); // Define explicitamente a coluna id_pergunta
            $table->foreign('id_pergunta')->references('id_pergunta')->on('perguntas')->onDelete('cascade'); // Adiciona a chave estrangeira

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
