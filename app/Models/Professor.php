<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';
    protected $primaryKey = 'id_professor';

    protected $fillable = [
        'id_usuario',
        'titulacao',
        'area_especializacao',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function disciplinas()
    {
        return $this->hasMany(ProfessorDisciplina::class, 'id_professor', 'id_professor');
    }
}
