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

// Rota para ação de API com PUT em /home/{id}
Route::put('/home/{id}', function ($id) {
    return response()->json(['message' => "Dados do item {$id} atualizados com sucesso"], 200);
});

// Rota para ação de API com DELETE em /home/{id}
Route::delete('/home/{id}', function ($id) {
    return response()->json(['message' => "Item {$id} deletado com sucesso"], 200);
});

// Rota para ação de API com PATCH em /home/{id}
Route::patch('/home/{id}', function ($id) {
    return response()->json(['message' => "Dados do item {$id} parcialmente atualizados"], 200);
});
