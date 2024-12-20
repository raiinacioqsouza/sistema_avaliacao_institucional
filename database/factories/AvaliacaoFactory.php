<?php

namespace Database\Factories;

use App\Models\Avaliacao;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvaliacaoFactory extends Factory
{
    protected $model = Avaliacao::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'descricao' => $this->faker->text,
            'data_inicio' => $this->faker->dateTimeBetween('now', '+1 week'),
            'data_fim' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'tipo' => $this->faker->randomElement(['professor', 'infraestrutura']),  // Valores compatíveis com a migração
            'anonimato' => $this->faker->boolean,
        ];
    }
}
