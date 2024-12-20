<?php

namespace Database\Factories;

use App\Models\Resposta;
use App\Models\Usuario;
use App\Models\Pergunta;
use Illuminate\Database\Eloquent\Factories\Factory;

class RespostaFactory extends Factory
{
    protected $model = Resposta::class;

    public function definition()
    {
        return [
            'id_usuario' => Usuario::inRandomOrder()->value('id_usuario'), // Seleciona um usuário existente
            'id_pergunta' => Pergunta::inRandomOrder()->value('id_pergunta'), // Seleciona uma pergunta existente
            'resposta' => $this->faker->text,
        ];
    }
}
