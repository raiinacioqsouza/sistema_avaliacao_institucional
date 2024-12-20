<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    // Método para listar os usuários (incluindo curso)
    public function index()
    {
        return Usuario::with('curso')->get(); // Relacionando com a tabela 'cursos'
    }

    // Método para criar um novo usuário
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:100',
            'email_institucional' => 'required|email|unique:usuarios,email_institucional',
            'matricula' => 'required|string|unique:usuarios,matricula',
            'senha' => 'required|string|min:6',
            'tipo_usuario' => 'required|in:aluno,tecnico-administrativo',
            'id_curso' => 'nullable|exists:cursos,id_curso',
            'turma' => 'nullable|string|max:50',
        ]);

        // Preparação e hash da senha
        $userData = $request->only(['nome', 'email_institucional', 'matricula', 'tipo_usuario', 'id_curso', 'turma']);
        $userData['senha'] = Hash::make($request->senha);

        // Criação do usuário
        return Usuario::create($userData);
    }

    // Método para exibir um usuário específico com o curso relacionado
    public function show($id)
    {
        return Usuario::with('curso')->findOrFail($id);
    }

    // Método para atualizar um usuário existente
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:100',
            'email_institucional' => 'required|email|unique:usuarios,email_institucional,' . $id,
            'matricula' => 'required|string|unique:usuarios,matricula,' . $id,
            'senha' => 'nullable|string|min:6',
            'tipo_usuario' => 'required|in:aluno,tecnico-administrativo',
            'id_curso' => 'nullable|exists:cursos,id_curso',
            'turma' => 'nullable|string|max:50',
        ]);

        // Encontrando o usuário
        $usuario = Usuario::findOrFail($id);

        // Filtrando os dados atualizados
        $userData = $request->only(['nome', 'email_institucional', 'matricula', 'tipo_usuario', 'id_curso', 'turma']);

        // Hash da senha, se fornecida
        if ($request->has('senha')) {
            $userData['senha'] = Hash::make($request->senha);
        }

        // Atualizando o usuário
        $usuario->update($userData);

        return $usuario;
    }

    // Método para excluir um usuário
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['error' => 'Usuário com ID ' . $id . ' não encontrado'], 404);
        }

        $usuario->delete();
        return response()->noContent();
    }

    // Método para realizar o logout (revogar o token)
    public function logout(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }

        // Revogando todos os tokens do usuário
        $user->tokens()->delete();

        return response()->json(['message' => 'Logout realizado com sucesso'], 200);
    }
}
