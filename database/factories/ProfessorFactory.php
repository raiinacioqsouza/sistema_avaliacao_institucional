<?php

namespace Database\Factories;

use App\Models\Professor;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    protected $model = Professor::class;

    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(), // Relaciona com um usuário criado via factory
            'titulacao' => $this->faker->randomElement(['Mestre', 'Doutor', 'Especialista']),
            'area_especializacao' => $this->faker->words(3, true), // Frase para área de especialização
            'especialidade' => $this->faker->word, // Valor para a coluna 'especialidade'
        ];
    }
}

