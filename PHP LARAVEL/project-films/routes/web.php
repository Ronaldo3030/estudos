<?php

use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/filmes', [FilmeController::class, 'list']);