<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';

    protected $fillable = [
        'nome_curso',
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_curso', 'id_curso');
    }
}
