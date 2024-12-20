<?php

namespace Database\Factories;

use App\Models\Pergunta;
use App\Models\Avaliacao;  // Importe o modelo Avaliacao
use Illuminate\Database\Eloquent\Factories\Factory;

class PerguntaFactory extends Factory
{
    protected $model = Pergunta::class;

    public function definition()
    {
        return [
            'avaliacao_id' => Avaliacao::factory(), // Cria uma avaliação aleatória associada
            'texto_pergunta' => $this->faker->sentence,
            'tipo_resposta' => $this->faker->randomElement(['multipla_escolha', 'texto', 'numerica']),
        ];
    }
}
