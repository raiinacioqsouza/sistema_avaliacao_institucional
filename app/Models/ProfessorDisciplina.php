<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorDisciplina extends Model
{
    use HasFactory;

    protected $table = 'professores_disciplinas';
    protected $primaryKey = 'id_disciplina_professor';

    protected $fillable = [
        'id_disciplina',
        'id_usuario',
    ];

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'id_disciplina', 'id_disciplina');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'id_usuario', 'id_usuario');
    }
}
