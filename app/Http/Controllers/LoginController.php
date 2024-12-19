<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
     // Validação dos dados de entrada
    $validated = $request->validate([
        'user' => 'required|email',  // 'user' será o email institucional
        'pass' => 'required|string', // 'pass' será a senha
    ]);

    // Tentando autenticar com o 'Auth::attempt'
    if (Auth::attempt(['email_institucional' => $validated['user'], 'senha' => $validated['pass']])) {
        // Se a autenticação for bem-sucedida, gera um token para o usuário
        /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'message' => 'Login bem-sucedido!',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    // Caso o 'Auth::attempt' falhe, verifica se o usuário existe e a senha está correta
    $user = User::where('email_institucional', $validated['user'])->first();

    if ($user && Hash::check($validated['pass'], $user->senha)) {
        // Se a senha estiver correta, gera um token para o usuário
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'message' => 'Login bem-sucedido!',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    // Se as credenciais não forem válidas
    return response()->json([
        'error' => 'Credenciais inválidas',
    ], 401);
    }

    public function logout(Request $request)
{
    // Obtém o usuário autenticado com o token de autenticação
    $user = $request->user();

    if (!$user) {
        // Se não houver usuário autenticado, retorna erro
        return response()->json(['error' => 'Usuário não autenticado'], 401);
    }

    // Revogando todos os tokens do usuário
    $user->tokens->each(function ($token) {
        $token->delete(); // Deleta cada token associado ao usuário
    });

    // Retorna uma resposta de sucesso
    return response()->json(['message' => 'Logout realizado com sucesso'], 200);
}
}



