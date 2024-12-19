<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Nome da tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * Nome da chave primária.
     *
     * @var string
     */
    protected $primaryKey = 'id_usuario';

    /**
     * Define se a chave primária é incrementada.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Tipo da chave primária.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'email_institucional',
        'matricula',
        'senha',
        'tipo_usuario',
        'id_curso',
        'turma',
    ];

    /**
     * Os atributos que devem ser ocultos na serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'senha',
        'remember_token',
    ];

    /**
     * Os atributos que devem ser convertidos para outros tipos.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    /**
     * Define como o Laravel deve obter a senha para autenticação.
     *
     * @return string
     */
    public function getAuthPassword(): string
    {
        return $this->senha; // Usa o campo 'senha' como senha do usuário.
    }
}
