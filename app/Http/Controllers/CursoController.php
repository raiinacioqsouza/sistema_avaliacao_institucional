<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all(); // Retorna todos os cursos
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_curso' => 'required|string|max:255|unique:cursos,nome_curso',
        ]);

        return Curso::create($validated);
    }

    public function show($id)
    {
        return Curso::findOrFail($id); // Retorna um curso específico
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $validated = $request->validate([
            'nome_curso' => 'sometimes|string|max:255|unique:cursos,nome_curso,' . $id . ',id_curso',
        ]);

        $curso->update($validated);
        return $curso;
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return response()->noContent();
    }
}
