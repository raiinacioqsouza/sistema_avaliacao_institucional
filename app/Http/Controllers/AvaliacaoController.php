<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index()
    {
        return Avaliacao::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'tipo' => 'required|in:professor,infraestrutura',
            'anonimato' => 'nullable|boolean',
        ]);

        return Avaliacao::create($request->all());
    }

    public function show($id)
    {
        return Avaliacao::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'tipo' => 'required|in:professor,infraestrutura',
            'anonimato' => 'nullable|boolean',
        ]);

        $avaliacao = Avaliacao::findOrFail($id);
        $avaliacao->update($request->all());

        return $avaliacao;
    }

    public function destroy($id)
    {
        Avaliacao::destroy($id);
        return response()->noContent();
    }
}
