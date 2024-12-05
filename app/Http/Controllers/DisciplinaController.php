<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        return Disciplina::all(); // Retorna todas as disciplinas
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_disciplina' => 'required|string|max:255|unique:disciplinas,nome_disciplina',
        ]);

        return Disciplina::create($validated);
    }

    public function show($id)
    {
        return Disciplina::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $validated = $request->validate([
            'nome_disciplina' => 'sometimes|string|max:255|unique:disciplinas,nome_disciplina,' . $id . ',id_disciplina',
        ]);

        $disciplina->update($validated);
        return $disciplina;
    }

    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();
        return response()->noContent();
    }
}
