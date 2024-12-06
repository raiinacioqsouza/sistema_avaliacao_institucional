<?php

namespace App\Http\Controllers;

use App\Models\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    public function index()
    {
        return Pergunta::with('avaliacao')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'avaliacao_id' => 'required|exists:avaliacoes,id',
            'texto_pergunta' => 'required|string',
            'tipo_resposta' => 'required|in:multipla_escolha,texto,numerica',
        ]);

        return Pergunta::create($request->all());
    }

    public function show($id)
    {
        return Pergunta::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'avaliacao_id' => 'required|exists:avaliacoes,id',
            'texto_pergunta' => 'required|string',
            'tipo_resposta' => 'required|in:multipla_escolha,texto,numerica',
        ]);

        $pergunta = Pergunta::findOrFail($id);
        $pergunta->update($request->all());

        return $pergunta;
    }

    public function destroy($id)
    {
        Pergunta::destroy($id);
        return response()->noContent();
    }
}
