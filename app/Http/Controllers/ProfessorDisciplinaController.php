<?php

namespace App\Http\Controllers;

use App\Models\ProfessorDisciplina;
use Illuminate\Http\Request;

class ProfessorDisciplinaController extends Controller
{
    public function index()
    {
        return ProfessorDisciplina::with(['professor', 'disciplina'])->get(); // Relaciona com as tabelas 'professores' e 'disciplinas'
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_professor' => 'required|exists:professores,id_professor',
            'id_disciplina' => 'required|exists:disciplinas,id_disciplina',
        ]);

        return ProfessorDisciplina::create($request->all());
    }

    public function show($id)
    {
        return ProfessorDisciplina::with(['professor', 'disciplina'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_professor' => 'required|exists:professores,id_professor',
            'id_disciplina' => 'required|exists:disciplinas,id_disciplina',
        ]);

        $professorDisciplina = ProfessorDisciplina::findOrFail($id);
        $professorDisciplina->update($request->all());

        return $professorDisciplina;
    }

    public function destroy($id)
    {
        ProfessorDisciplina::destroy($id);
        return response()->noContent();
    }
}
