<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('perguntas')) {
            Schema::create('perguntas', function (Blueprint $table) {
                $table->id(); // Cria a coluna 'id'
                $table->foreignId('avaliacao_id')->constrained('avaliacoes')->onDelete('cascade'); // Altera para 'avaliacao_id' para seguir convenções de nomenclatura
                $table->text('texto_pergunta');
                $table->enum('tipo_resposta', ['multipla_escolha', 'texto', 'numerica']);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}

