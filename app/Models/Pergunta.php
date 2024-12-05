<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $table = 'perguntas';
    protected $primaryKey = 'id_pergunta';

    protected $fillable = [
        'id_avaliacao',
        'texto_pergunta',
        'tipo_resposta',
    ];

    public function avaliacao()
    {
        return $this->belongsTo(Avaliacao::class, 'id_avaliacao', 'id_avaliacao');
    }

    public function respostas()
    {
        return $this->hasMany(Resposta::class, 'id_pergunta', 'id_pergunta');
    }
}
