<?php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial (GET)
Route::get('/', function () {
    return view('home');  // Retorna a view 'home.blade.php'
});

// Rota para ação de API com POST em /home
Route::post('/home', function () {
    return response()->json(['message' => 'Dados recebidos com sucesso'], 200);
});

// Rota para ação de API com GET em /home
Route::get('/home', function () {
    return response()->json(['message' => 'Página inicial'], 200);
});

// Rota POST /home
Route::post('/home', [HomeController::class, 'store']);
