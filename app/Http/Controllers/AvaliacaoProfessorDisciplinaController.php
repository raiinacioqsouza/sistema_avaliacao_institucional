<?php

namespace App\Http\Controllers;

use App\Models\AvaliacaoProfessorDisciplina;
use Illuminate\Http\Request;

class AvaliacaoProfessorDisciplinaController extends Controller
{
    public function index()
    {
        return AvaliacaoProfessorDisciplina::with(['avaliacao', 'professorDisciplina'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_avaliacao' => 'required|exists:avaliacoes,id',
            'id_disciplina_professor' => 'required|exists:professores_disciplinas,id_disciplina_professor',
        ]);

        return AvaliacaoProfessorDisciplina::create($request->all());
    }

    public function show($id)
    {
        return AvaliacaoProfessorDisciplina::with(['avaliacao', 'professorDisciplina'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_avaliacao' => 'required|exists:avaliacoes,id',
            'id_disciplina_professor' => 'required|exists:professores_disciplinas,id_disciplina_professor',
        ]);

        $avaliacaoProfessorDisciplina = AvaliacaoProfessorDisciplina::findOrFail($id);
        $avaliacaoProfessorDisciplina->update($request->all());

        return $avaliacaoProfessorDisciplina;
    }

    public function destroy($id)
    {
        AvaliacaoProfessorDisciplina::destroy($id);
        return response()->noContent();
    }
}
