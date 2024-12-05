<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index()
    {
        return Avaliacao::with('perguntas')->get(); // Inclui as perguntas relacionadas
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'tipo' => 'required|string',
            'anonimato' => 'required|boolean',
        ]);

        return Avaliacao::create($validated);
    }

    public function show($id)
    {
        return Avaliacao::with('perguntas')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        $validated = $request->validate([
            'titulo' => 'sometimes|string|max:255',
            'descricao' => 'nullable|string',
            'data_inicio' => 'sometimes|date',
            'data_fim' => 'sometimes|date|after_or_equal:data_inicio',
            'tipo' => 'sometimes|string',
            'anonimato' => 'sometimes|boolean',
        ]);

        $avaliacao->update($validated);
        return $avaliacao;
    }

    public function destroy($id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        $avaliacao->delete();
        return response()->noContent();
    }
}
