<?php

use App\Http\Controllers\ComentController;
use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [FilmeController::class, 'list']);
    Route::get('/{id}/coment', [ComentController::class, 'addComent']);
});