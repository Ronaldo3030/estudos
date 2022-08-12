<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Teste';
// });

Route::get('/', 'App\Http\Controllers\HomeController');

Route::prefix('/tarefas')->group(function(){
    Route::get('/', 'App\Http\Controllers\TarefasController@list')->name('tarefas.list'); //listagem de tarefas

    Route::get('/add', 'App\Http\Controllers\TarefasController@add')->name('tarefas.add'); //adição de tarefas
    Route::post('/add', 'App\Http\Controllers\TarefasController@addAction'); //ação de adição de tarefas

    Route::get('/edit/{id}', 'App\Http\Controllers\TarefasController@edit')->name('tarefas.edit'); //edição de tarefas
    Route::post('/edit/{id}', 'App\Http\Controllers\TarefasController@editAction'); //ação de edição de tarefas

    Route::get('/delete/{id}', 'App\Http\Controllers\TarefasController@delete')->name('tarefas.delete'); //ação de delete de tarefas

    Route::get('/marcar/{id}', 'App\Http\Controllers\TarefasController@done')->name('tarefas.done'); //marcar resolvido/não
});