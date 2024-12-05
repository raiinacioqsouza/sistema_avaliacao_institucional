<?php

namespace App\Http\Controllers;

use App\Models\ProfessorDisciplina;
use Illuminate\Http\Request;

class ProfessorDisciplinaController extends Controller
{
    public function index()
    {
        return ProfessorDisciplina::with(['professor', 'disciplina'])->get(); // Inclui professor e disciplina relacionados
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_disciplina' => 'required|exists:disciplinas,id_disciplina',
            'id_usuario' => 'required|exists:usuarios,id_usuario',
        ]);

        return ProfessorDisciplina::create($validated);
    }

    public function show($id)
    {
        return ProfessorDisciplina::with(['professor', 'disciplina'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $professorDisciplina = ProfessorDisciplina::findOrFail($id);
        $validated = $request->validate([
            'id_disciplina' => 'sometimes|exists:disciplinas,id_disciplina',
            'id_usuario' => 'sometimes|exists:usuarios,id_usuario',
        ]);

        $professorDisciplina->update($validated);
        return $professorDisciplina;
    }

    public function destroy($id)
    {
        $professorDisciplina = ProfessorDisciplina::findOrFail($id);
        $professorDisciplina->delete();
        return response()->noContent();
    }
}
