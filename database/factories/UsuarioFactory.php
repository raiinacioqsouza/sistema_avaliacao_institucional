<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email_institucional' => $this->faker->unique()->safeEmail(),
            'matricula' => $this->faker->unique()->randomNumber(8),
            'senha' => bcrypt('senha123'), // Gera uma senha padrão criptografada
            'tipo_usuario' => $this->faker->randomElement(['aluno', 'tecnico-administrativo']),
            'id_curso' => null, // Ou use um ID válido para associar a um curso existente
            'turma' => $this->faker->randomLetter(),
        ];
    }
}
