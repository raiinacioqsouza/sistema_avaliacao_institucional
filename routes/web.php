<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Substitua 'home' pelo nome da sua view
});
