<?php

namespace App\Http\Controllers;

use App\Models\Resposta;
use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function index()
    {
        return Resposta::with(['usuario', 'pergunta'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_pergunta' => 'required|exists:perguntas,id',
            'resposta' => 'required|string',
        ]);

        return Resposta::create($request->all());
    }

    public function show($id)
    {
        return Resposta::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_pergunta' => 'required|exists:perguntas,id',
            'resposta' => 'required|string',
        ]);

        $resposta = Resposta::findOrFail($id);
        $resposta->update($request->all());

        return $resposta;
    }

    public function destroy($id)
    {
        Resposta::destroy($id);
        return response()->noContent();
    }
}
