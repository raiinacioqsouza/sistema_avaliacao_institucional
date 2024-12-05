<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = 'avaliacoes';
    protected $primaryKey = 'id_avaliacao';

    protected $fillable = [
        'titulo',
        'descricao',
        'data_inicio',
        'data_fim',
        'tipo',
        'anonimato',
    ];

    public function perguntas()
    {
        return $this->hasMany(Pergunta::class, 'id_avaliacao', 'id_avaliacao');
    }
}
