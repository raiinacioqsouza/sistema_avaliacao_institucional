<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasTable extends Migration
{
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->id('id_pergunta'); // Chave primária correta
            $table->foreignId('id_avaliacao')->constrained('avaliacoes')->onDelete('cascade');
            $table->text('texto_pergunta');
            $table->enum('tipo_resposta', ['multipla_escolha', 'texto', 'numerica']);
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}

