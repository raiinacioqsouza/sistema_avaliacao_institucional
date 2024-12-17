<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;

    protected $table = 'respostas';
    protected $primaryKey = 'id_resposta';

    protected $fillable = [
        'id_pergunta',
        'id_usuario',
        'resposta',
        'id_disciplina_professor',
    ];

    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class, 'id_pergunta', 'id'); // 'id' é a chave primária de 'perguntas'
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function professorDisciplina()
    {
        return $this->belongsTo(ProfessorDisciplina::class, 'id_disciplina_professor', 'id_disciplina_professor');
    }
}
