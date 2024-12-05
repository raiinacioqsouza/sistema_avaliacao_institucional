<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nome',
        'email_institucional',
        'matricula',
        'senha',
        'tipo_usuario',
        'curso',
        'turma',
        'id_curso',
    ];

    public function professor()
    {
        return $this->hasOne(Professor::class, 'id_usuario', 'id_usuario');
    }

    public function respostas(): HasMany
    {
        return $this->hasMany(Resposta::class, 'id_usuario', 'id_usuario');
    }
}
