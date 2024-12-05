<?php

namespace App\Http\Controllers;

use App\Models\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    public function index()
    {
        return Pergunta::with('avaliacao')->get(); // Inclui a avaliação relacionada
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_avaliacao' => 'required|exists:avaliacoes,id_avaliacao',
            'texto_pergunta' => 'required|string|max:255',
            'tipo_resposta' => 'required|string|max:50',
        ]);

        return Pergunta::create($validated);
    }

    public function show($id)
    {
        return Pergunta::with('avaliacao')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pergunta = Pergunta::findOrFail($id);
        $validated = $request->validate([
            'id_avaliacao' => 'sometimes|exists:avaliacoes,id_avaliacao',
            'texto_pergunta' => 'sometimes|string|max:255',
            'tipo_resposta' => 'sometimes|string|max:50',
        ]);

        $pergunta->update($validated);
        return $pergunta;
    }

    public function destroy($id)
    {
        $pergunta = Pergunta::findOrFail($id);
        $pergunta->delete();
        return response()->noContent();
    }
}
