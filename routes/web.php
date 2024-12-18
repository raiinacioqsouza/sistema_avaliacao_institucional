<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Substitua 'home' pelo nome da sua view
});

Route::get('/Responses', function () {
    return view('Responses'); // Substitua 'home' pelo nome da sua view
});

Route::get('/User', function () {
    return view('CommonUser'); // Substitua 'home' pelo nome da sua view
});

Route::get('/CriarQuestionario', function () {
    return view('create_questionnaire'); // Substitua 'home' pelo nome da sua view
});

Route::get('/SuperAdmin', function () {
    return view('SAdminPage'); // Substitua 'home' pelo nome da sua view
});
