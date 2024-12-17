<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasTable extends Migration
{
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_pergunta');  // Este é o tipo correto para a chave primária
            $table->foreignId('avaliacao_id')->constrained('avaliacoes')->onDelete('cascade'); // Usando 'foreignId' para o relacionamento com 'avaliacoes'
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
