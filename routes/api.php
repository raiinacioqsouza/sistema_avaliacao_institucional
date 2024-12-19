<?php

// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\PerguntaController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorDisciplinaController;
use App\Http\Controllers\AvaliacaoProfessorDisciplinaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RespostaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

// Grupo de rotas protegidas com middleware
Route::middleware(['auth:sanctum'])->group(function () {
    // Cursos
    Route::apiResource('cursos', CursoController::class);

    // Usuários
    Route::apiResource('usuarios', UsuarioController::class);

    // Professores
    Route::apiResource('professores', ProfessorController::class);

    // Avaliações
    Route::apiResource('avaliacoes', AvaliacaoController::class);

    // Perguntas
    Route::apiResource('perguntas', PerguntaController::class);

    // Disciplinas
    Route::apiResource('disciplinas', DisciplinaController::class);

    // Professores Disciplinas
    Route::apiResource('professores_disciplinas', ProfessorDisciplinaController::class);

    // Avaliação Professor Disciplina
    Route::apiResource('avaliacao_professor_disciplina', AvaliacaoProfessorDisciplinaController::class);

    // Respostas
    Route::apiResource('respostas', RespostaController::class);


    
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only('user', 'pass');

    if(Auth::attempt($credentials)) {
        $user = $request->user();

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            "acess_token" => $token,
            "token_type" => 'Bearer'
        ]);

    };
    
    return response()->json([
        "message" => "Usuário inválido!"
    ]);
});

//     Route::post('/tokens/create', function (Request $request) {
//        $token = $request->user()->createToken($request->token_name);

//        return ['token' => $token->plainTextToken];

 
   
//    });

Route::post('/loginteste', [LoginController::class, 'authenticate']);
Route::post('/create-user', [UsuarioController::class, 'store']);
Route::put('/update-user', [UsuarioController::class, 'update']);
Route::post('/logout-teste', [LoginController::class, 'logout']);



Route::get('/home', function () {
   return response()->json(['message' => 'Página iniciald'], 200);
});



Route::get('/test-users', function () {
    $users = User::all();
    return response()->json($users);
});



