<?php

namespace Database\Factories;

use App\Models\Pergunta;
use App\Models\Avaliacao; // Certifique-se de que a model 'Avaliacao' está importada
use Illuminate\Database\Eloquent\Factories\Factory;

class PerguntaFactory extends Factory
{
    protected $model = Pergunta::class;

    public function definition()
    {
        return [
            'avaliacao_id' => Avaliacao::factory(), // Cria uma avaliação para associar a pergunta
            'texto_pergunta' => $this->faker->sentence, // Texto fictício para a pergunta
            'tipo_resposta' => $this->faker->randomElement(['multipla_escolha', 'texto', 'numerica']), // Tipo de resposta aleatório
        ];
    }
}

