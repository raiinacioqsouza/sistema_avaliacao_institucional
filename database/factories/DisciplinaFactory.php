<?php

namespace Database\Factories;

use App\Models\Disciplina;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisciplinaFactory extends Factory
{
    protected $model = Disciplina::class;

    public function definition()
    {
        return [
            'nome_disciplina' => $this->faker->word,
            'id_curso' => Curso::factory(), // Relaciona com um curso criado via factory
        ];
    }
}
