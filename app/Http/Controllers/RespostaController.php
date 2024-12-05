<?php

namespace App\Http\Controllers;

use App\Models\Resposta;
use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function index()
    {
        return Resposta::with(['pergunta', 'usuario', 'disciplinaProfessor'])->get(); // Inclui as relações relacionadas
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pergunta' => 'required|exists:perguntas,id_pergunta',
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'resposta' => 'required|string|max:255',
            'id_disciplina_professor' => 'required|exists:professores_disciplinas,id_disciplina_professor',
        ]);

        return Resposta::create($validated);
    }

    public function show($id)
    {
        return Resposta::with(['pergunta', 'usuario', 'disciplinaProfessor'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $resposta = Resposta::findOrFail($id);
        $validated = $request->validate([
            'id_pergunta' => 'sometimes|exists:perguntas,id_pergunta',
            'id_usuario' => 'sometimes|exists:usuarios,id_usuario',
            'resposta' => 'sometimes|string|max:255',
            'id_disciplina_professor' => 'sometimes|exists:professores_disciplinas,id_disciplina_professor',
        ]);

        $resposta->update($validated);
        return $resposta;
    }

    public function destroy($id)
    {
        $resposta = Resposta::findOrFail($id);
        $resposta->delete();
        return response()->noContent();
    }
}
