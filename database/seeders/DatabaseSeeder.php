<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CursoSeeder::class,
            UsuarioSeeder::class,
            ProfessorSeeder::class,
            DisciplinaSeeder::class,
            PerguntaSeeder::class,
            RespostaSeeder::class,
        ]);
    }
}

