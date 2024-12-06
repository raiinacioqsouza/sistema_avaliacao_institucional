<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        return Disciplina::with('curso')->get();  // Relaciona com a tabela 'cursos'
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_disciplina' => 'required|string|max:100',
            'id_curso' => 'required|exists:cursos,id_curso',
        ]);

        return Disciplina::create($request->all());
    }

    public function show($id)
    {
        return Disciplina::with('curso')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_disciplina' => 'required|string|max:100',
            'id_curso' => 'required|exists:cursos,id_curso',
        ]);

        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());

        return $disciplina;
    }

    public function destroy($id)
    {
        Disciplina::destroy($id);
        return response()->noContent();
    }
}
