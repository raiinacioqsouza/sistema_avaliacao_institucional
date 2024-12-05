<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';
    protected $primaryKey = 'id_disciplina';

    protected $fillable = [
        'nome_disciplina',
    ];

    public function professores()
    {
        return $this->hasMany(ProfessorDisciplina::class, 'id_disciplina', 'id_disciplina');
    }
}
