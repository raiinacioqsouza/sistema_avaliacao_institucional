<?php

// routes/api.php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\PerguntaController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorDisciplinaController;
use App\Http\Controllers\AvaliacaoProfessorDisciplinaController;
use App\Http\Controllers\RespostaController;

// Cursos
Route::apiResource('cursos', CursoController::class);

// Usuários
Route::apiResource('usuarios', UsuarioController::class);

// Professores
Route::apiResource('professores', ProfessorController::class);

// Avaliações
Route::apiResource('avaliacoes', AvaliacaoController::class);

// Perguntas
Route::apiResource('perguntas', PerguntaController::class);

// Disciplinas
Route::apiResource('disciplinas', DisciplinaController::class);

// Professores Disciplinas
Route::apiResource('professores_disciplinas', ProfessorDisciplinaController::class);

// Avaliação Professor Disciplina
Route::apiResource('avaliacao_professor_disciplina', AvaliacaoProfessorDisciplinaController::class);

// Respostas
Route::apiResource('respostas', RespostaController::class);
