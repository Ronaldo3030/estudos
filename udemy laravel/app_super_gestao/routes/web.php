<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Teste';
// });

Route::get('/', 'App\Http\Controllers\HomeController');
Route::get('/login', function(){
    echo "Página login";
})->name('login');

Route::prefix('/tarefas')->group(function(){
    Route::get('/', 'App\Http\Controllers\TarefasController@list')->name('tarefas.list')->middleware('auth'); //listagem de tarefas

    Route::get('/add', 'App\Http\Controllers\TarefasController@add')->name('tarefas.add'); //adição de tarefas
    Route::post('/add', 'App\Http\Controllers\TarefasController@addAction'); //ação de adição de tarefas

    Route::get('/edit/{id}', 'App\Http\Controllers\TarefasController@edit')->name('tarefas.edit'); //edição de tarefas
    Route::post('/edit/{id}', 'App\Http\Controllers\TarefasController@editAction'); //ação de edição de tarefas

    Route::get('/delete/{id}', 'App\Http\Controllers\TarefasController@delete')->name('tarefas.delete'); //ação de delete de tarefas

    Route::get('/marcar/{id}', 'App\Http\Controllers\TarefasController@done')->name('tarefas.done'); //marcar resolvido/não
});

Route::resource('todo', 'App\Http\Controllers\TodoController');
/*
GET -> /todo - index - NOME: todo.index - LISTA OS ITENS
GET -> /todo/create - create - NOME: todo.create - FORM DE CRIAÇÃO DE ITENS
POST -> /todo - store - NOME: todo.store - RECEBER OS DADOS E ADD ITEM (add action)
GET -> /todo/{id} - show - NOME: todo.show - ITEM INDIVIDUAL
GET -> /todo/{id}/edit - edit - NOME: todo.edit - FORM DE EDIÇÃO DE ITENS
PUT -> /todo/{id} - update - NOME: todo.update - RECEBE OS DADOS E UPDATE ITEN (edit action)
DELETE -> /todo/{id} - destroy - NOME: todo.destroy - DELETA O ITEM
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
