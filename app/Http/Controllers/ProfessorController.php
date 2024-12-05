<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        return Professor::with('usuario')->get(); // Retorna todos os professores com seus dados de usuário
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario|unique:professores,id_usuario',
            'titulacao' => 'nullable|string|max:255',
            'area_especializacao' => 'nullable|string|max:255',
        ]);

        return Professor::create($validated);
    }

    public function show($id)
    {
        return Professor::with('usuario')->findOrFail($id); // Retorna um professor específico
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::findOrFail($id);
        $validated = $request->validate([
            'titulacao' => 'sometimes|string|max:255',
            'area_especializacao' => 'sometimes|string|max:255',
        ]);

        $professor->update($validated);
        return $professor;
    }

    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return response()->noContent();
    }
}
