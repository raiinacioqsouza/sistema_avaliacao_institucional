<?php

namespace Database\Seeders;

use App\Models\Pergunta;
use Illuminate\Database\Seeder;

class PerguntaSeeder extends Seeder
{
    public function run()
    {
        Pergunta::factory()->count(10)->create(); // Cria 10 perguntas fictícias
    }
}
