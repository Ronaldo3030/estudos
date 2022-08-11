<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function(){
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
});
Route::prefix('/cadastro')->group(function(){
    Route::get('/', 'App\Http\Controllers\CadastroController@index')->name('cadastro');
    Route::post('/', 'App\Http\Controllers\CadastroController@cadastroAction');
});