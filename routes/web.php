<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Rota GET /home
Route::get('/home', [HomeController::class, 'index']);

// Rota POST /home
Route::post('/home', [HomeController::class, 'store']);
