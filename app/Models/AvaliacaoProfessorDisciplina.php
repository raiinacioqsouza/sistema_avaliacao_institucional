<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoProfessorDisciplina extends Model
{
    use HasFactory;

    protected $table = 'avaliacao_professor_disciplina';

    protected $fillable = [
        'id_avaliacao',
        'id_disciplina_professor',
    ];

    public function avaliacao()
    {
        return $this->belongsTo(Avaliacao::class, 'id_avaliacao', 'id_avaliacao');
    }

    public function professorDisciplina()
    {
        return $this->belongsTo(ProfessorDisciplina::class, 'id_disciplina_professor', 'id_disciplina_professor');
    }
}
