<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_curso' => 'required|string|max:100',
            'descricao' => 'nullable|string',
        ]);

        return Curso::create($request->all());
    }

    public function show($id)
    {
        return Curso::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_curso' => 'required|string|max:100',
            'descricao' => 'nullable|string',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($request->all());

        return $curso;
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return response()->noContent();
    }
}
