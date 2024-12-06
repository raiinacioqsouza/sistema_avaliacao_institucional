<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::with('curso')->get();  // Relacionando com a tabela 'cursos'
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email_institucional' => 'required|email|unique:usuarios,email_institucional',
            'matricula' => 'required|string|unique:usuarios,matricula',
            'senha' => 'required|string|min:6',
            'tipo_usuario' => 'required|in:aluno,tecnico-administrativo',
            'id_curso' => 'nullable|exists:cursos,id_curso',
            'turma' => 'nullable|string|max:50',
        ]);

        return Usuario::create($request->all());
    }

    public function show($id)
    {
        return Usuario::with('curso')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email_institucional' => 'required|email|unique:usuarios,email_institucional,' . $id,
            'matricula' => 'required|string|unique:usuarios,matricula,' . $id,
            'senha' => 'nullable|string|min:6',
            'tipo_usuario' => 'required|in:aluno,tecnico-administrativo',
            'id_curso' => 'nullable|exists:cursos,id_curso',
            'turma' => 'nullable|string|max:50',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return $usuario;
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return response()->noContent();
    }
}
