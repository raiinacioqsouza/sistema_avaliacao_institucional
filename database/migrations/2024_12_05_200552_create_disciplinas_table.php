<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinasTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('disciplinas')) {
            Schema::create('disciplinas', function (Blueprint $table) {
                $table->id('id_disciplina'); // Use uma chave primária personalizada, se necessário
                $table->string('nome_disciplina', 100);
                $table->foreignId('id_curso') // Define automaticamente como unsignedBigInteger
                      ->constrained('cursos', 'id_curso') // Relaciona com a coluna correta na tabela 'cursos'
                      ->onDelete('cascade'); // Configuração de exclusão em cascata
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
}
