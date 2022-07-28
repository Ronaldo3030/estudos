<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/teste', function () {
//     return view('teste');
// });

Route::get('/', 'App\Http\Controllers\HomeController');
Route::view('/teste', 'teste');



// ROTA DINAMICA PASSADA PELA URL
Route::get('/noticia/{slug}', function ($slug) {
    echo "Slug: " . $slug;
});
Route::get('/noticia/{slug}/comentario/{id}', function ($slug, $id) {
    echo "Slug: " . $slug . "<br>";
    echo "Comentario: " . $id;
});
Route::get('/user/{id}', function ($id) {
    echo "Usuario ID: " . $id;
});
Route::get('/user/{name}', function ($name) {
    echo "Usuario nome: " . $name;
})->where('name', '[a-z]+');


// GRUPO
Route::prefix('/config')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\ConfigController@index');
    Route::post('/', 'App\Http\Controllers\Admin\ConfigController@index');
    Route::get('/info', 'App\Http\Controllers\Admin\ConfigController@info');
    Route::get('/permissoes', 'App\Http\Controllers\Admin\ConfigController@permissoes');
});


Route::prefix('/tarefas')->group(function(){
    Route::get('/', 'App\Http\Controllers\TarefasController@list'); //listagem de tarefas

    Route::get('add', 'App\Http\Controllers\TarefasController@add'); // tela de adição de nova tarefa
    Route::post('add', 'App\Http\Controllers\TarefasController@addAction'); // ação de adição de nova tarefa

    Route::get('edit/{id}', 'App\Http\Controllers\TarefasController@edit'); //tela de edição
    Route::post('edit/{id}', 'App\Http\Controllers\TarefasController@editAction'); //ação de adição

    Route::get('delete/{id}', 'App\Http\Controllers\TarefasController@delete'); //ação de delete

    Route::get('marcar/{id}', 'App\Http\Controllers\TarefasController@done'); //marcar resolvido ou não
});

// 404 NOTFOUND (página não encontrada)
Route::fallback(function () {
    echo "Página não encontrada!";
});
