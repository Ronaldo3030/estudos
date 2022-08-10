<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/cadastro')->group(function(){
    Route::get('/', 'App\Http\Controllers\CadastroController@index');
    Route::post('/', 'App\Http\Controllers\CadastroController@cadastroAction');
});