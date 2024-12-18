<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'user' => 'required|string',
            'pass' => 'required|string|min:8',
        ]);

        // Lógica de autenticação (exemplo simplificado)
        if ($validated) {
            // Se os dados forem válidos, redirecione ou faça a autenticação
            return redirect()->route('home')->with('success', 'Login bem-sucedido!');
        }

        // Caso contrário, retorne com erros
        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }
}
