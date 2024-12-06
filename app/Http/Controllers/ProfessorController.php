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
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'especialidade' => 'nullable|string|max:100',
        ]);

        return Professor::create($request->all());
    }

    public function show($id)
    {
        return Professor::with('usuario')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'especialidade' => 'nullable|string|max:100',
        ]);

        $professor = Professor::findOrFail($id);
        $professor->update($request->all());

        return $professor;
    }

    public function destroy($id)
    {
        Professor::destroy($id);
        return response()->noContent();
    }
}
