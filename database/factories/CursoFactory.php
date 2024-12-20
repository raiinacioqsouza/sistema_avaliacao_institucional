<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nome_curso' => $this->faker->word,
            'descricao' => $this->faker->paragraph,
        ];
    }
}
