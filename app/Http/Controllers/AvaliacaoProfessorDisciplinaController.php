<?php

namespace App\Http\Controllers;

use App\Models\AvaliacaoProfessorDisciplina;
use Illuminate\Http\Request;

class AvaliacaoProfessorDisciplinaController extends Controller
{
    public function index()
    {
        return AvaliacaoProfessorDisciplina::with(['avaliacao', 'disciplinaProfessor'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_avaliacao' => 'required|exists:avaliacoes,id_avaliacao',
            'id_disciplina_professor' => 'required|exists:professores_disciplinas,id_disciplina_professor',
        ]);

        return AvaliacaoProfessorDisciplina::create($validated);
    }

    public function show($id)
    {
        return AvaliacaoProfessorDisciplina::with(['avaliacao', 'disciplinaProfessor'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $avaliacaoProfessorDisciplina = AvaliacaoProfessorDisciplina::findOrFail($id);
        $validated = $request->validate([
            'id_avaliacao' => 'sometimes|exists:avaliacoes,id_avaliacao',
            'id_disciplina_professor' => 'sometimes|exists:professores_disciplinas,id_disciplina_professor',
        ]);

        $avaliacaoProfessorDisciplina->update($validated);
        return $avaliacaoProfessorDisciplina;
    }

    public function destroy($id)
    {
        $avaliacaoProfessorDisciplina = AvaliacaoProfessorDisciplina::findOrFail($id);
        $avaliacaoProfessorDisciplina->delete();
        return response()->noContent();
    }
}
