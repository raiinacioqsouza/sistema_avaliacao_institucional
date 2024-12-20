<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Página inicial'], 200);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Dados recebidos com sucesso'], 200);
    }
}
