<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Rota GET /home
Route::get('/home', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('home'); // Substitua 'home' pelo nome da sua view
});
